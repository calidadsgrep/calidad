<?php

App::uses('AppController', 'Controller');

/**
 * Planauditorias Controller
 *
 * @property Planauditoria $Planauditoria
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PlanauditoriasController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Flash', 'Session');

    public function beforeFilter() {
        parent::beforeFilter();
        /* El loadModel () la función es muy útil cuando es necesario utilizar un modelo que no es el modelo por defecto del 
          controlador o su modelo asociado */
        $this->loadModel('Cliente');
        $this->loadModel('Auditor');
        $this->loadModel('Auditoria');
        $this->loadModel('Normageneral');
        $this->loadModel('AuditoriasNormagenerals');
        $this->loadModel('Subnormaindice');
        $this->loadModel('Indicesplanificacion');
        $this->loadModel('Subnorma');
        $this->loadModel('Usuario');
        $this->loadModel('Lista');
        $this->loadModel('Debe');
        //$this->loadModel('Proceso');
    }

    /**
     * index method
     *
     * @return void
     */
    public function index($auditoria_id) {
        $this->Session->write('AUD_ID', $auditoria_id);
        
        //$this->layout = 'vacio';
        $user = $this->Session->read('Usuario');
        $this->Paginator->settings = array(
            'conditions' => array('Planauditoria.auditoria_id' => $auditoria_id),
            'limit' => 5,
            'order' => 'Planauditoria.id ',
        );
        $this->set('planauditorias', $this->Paginator->paginate());
        $data = $this->Paginator->paginate('Planauditoria');
       $this->set(compact('user'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
   $this->layout='vacio';
       $plan = $this->Planauditoria->find('all', array('conditions' => array('Planauditoria.auditoria_id' => $id)));
        //debug($plan);
        foreach ($plan as $planes) {
            $id_auditoria = $planes['Planauditoria']['auditoria_id'];
            $id_planAuditoria[] = $planes['Planauditoria']['id'];
        }

        $auditorias = $this->Auditoria->find('all', array('conditions' => array('Auditoria.id' => $id_auditoria)));
      // debug($auditorias);
        $planAuditoria = $this->Indicesplanificacion->find('all', array('conditions' => array('Indicesplanificacion.planauditoria_id' => $id_planAuditoria), 'group' => 'subnorma_id'));
        foreach ($planAuditoria as $value) {
            $id_subnormas[] = $value['Subnormaindice']['subnorma_id'];
        }
        $planes = $this->Planauditoria->find('all', array('conditions' => array('Planauditoria.auditoria_id' => $id_auditoria)));
        $subnormas = $this->Subnorma->find('all', array('conditions' => array('Subnorma.id' => $id_subnormas)));

        $this->set(compact('auditorias', 'plan', 'nombreAuditor', 'subnormas', 'planAuditoria', 'planes'));

    }

    public function listachequeo($planauditoria_id) {
    //debug($planauditoria_id);
        if ($this->request->is('post')) {
            if (!empty($this->request->data['Lista'])) {
                foreach ($this->request->data['Lista'] as $value) {
                    if (!empty($value['debe_id'])) {
                        $this->Lista->create();
                        $dato['Lista'] = $value;
                        $dato['Lista']['planauditoria_id'] = $planauditoria_id;
                        $this->Lista->save($dato);
                    }
                }
            }
            $this->Session->setFlash(__('La lista de chequeo ha sido validada y registrada con éxito.'));
            return $this->redirect(array('action' => 'index/' . $planauditoria_id));
        }
        $planauditorias = $this->Planauditoria->find('all', array('conditions' => array('Planauditoria.id' => $planauditoria_id)));
        //debug($planauditorias);
        $planAuditoria = $this->Indicesplanificacion->find('all', array('conditions' => array('Indicesplanificacion.planauditoria_id' => $planauditoria_id)));
      // debug($planAuditoria);
        foreach ($planAuditoria as $value) {
        
            $id_subnormas[] = $value['Subnormaindice']['subnorma_id'];
            //debug($id_subnormas);
        }
        //debug($id_subnormas);
        $subnormas = $this->Subnorma->find('all', array('conditions' => array('Subnorma.id' => $id_subnormas)));
        //debug($subnormas);

        $subnormasindice = $this->Subnormaindice->find('all', array('conditions' => array('Subnormaindice.subnorma_id' => $id_subnormas),'order'=>'Subnormaindice.numero'));
        //debug($subnormasindice);
        foreach ($subnormasindice as $value00) {
            foreach ($value00['Debe'] as $value001) {
                $deb[] = $value001['id'];
            }
        }
        $this->Lista->recursive = -1;
        $elegidos=$this->Lista->find('all',array('conditions'=>array('Lista.planauditoria_id'=>$planauditoria_id)));
        
        foreach ($elegidos as $value) {
            $elegido[]=$value['Lista']['debe_id'];
        }
        
        $debes = $this->Debe->find('all', array('conditions' => array('Debe.id' => $deb), 'order' => 'Debe.numeral'));
//debug($debes);
        $this->set(compact('planauditorias', 'subnormas', 'planAuditoria', 'planes', 'subnormasindice', 'planauditoria_id', 'debes', 'elegido'));
    }

    public function asignar($id = null) {
        if ($this->request->is('post')) {
            $this->Planauditoria->create();
            if ($this->Planauditoria->save($this->request->data)) {
                $id = $this->Planauditoria->id;
                $this->Session->setFlash(__('The planauditoria has been saved.'));
                return $this->redirect(array('action' => 'asignar2/' . $id));
            } else {
                $this->Session->setFlash(__('The planauditoria could not be saved. Please, try again.'));
            }
        }
        $auditors = $this->Planauditoria->Auditor->find('list');
        $this->set(compact('auditors'));
    }

    public function asignar2($id_auditoria) {
        if ($this->request->is(array('post', 'put'))) {
            $this->Planauditoria->create();
            if ($this->Planauditoria->save($this->request->data)) {
                $id = $this->Planauditoria->id;
                $this->Flash->success(__('The planauditoria has been saved.'));
                return $this->redirect(array('action' => 'asignar3/' . $id_auditoria));
            } else {
                $this->Flash->error(__('The planauditoria could not be saved. Please, try again.'));
            }
        }
        $procesos = $this->Planauditoria->Proceso->find('list');
        $auditors = $this->Planauditoria->Usuario->find('list');
        $this->set(compact('auditors', 'id', 'id_auditoria'));
    }

    public function asignar3($id_auditoria) {
        //$this->layout='vacio';
        if ($this->request->is('post')) {
            $this->Planauditoria->create();
            if ($this->Planauditoria->save($this->request->data)) {
                $id = $this->Planauditoria->id;
                $this->Flash->success(__('El plan auditoria ha sido registrado.'));
                return $this->redirect(array('controller' => 'indicesplanificacions', 'action' => 'normas/' . $id . '/' . $id_auditoria));
            } else {
                $this->Session->setFlash(__('El plan auditoria  no ha sido registrado.'));
            }
        }
        $plan = $this->Planauditoria->Auditoria->read('empresa_id,fecha', $id_auditoria);
        //debug($plan);
        $auditores=$this->Usuario->find('all',array('conditions' => array('Usuario.nivel_id'=>'3')));
        //debug($auditores);
        $fechaPlan=$plan['Auditoria']['fecha'];
//        debug($fechaPlan);

        $procesos = $this->Planauditoria->Proceso->find('list', array('conditions' => array('Proceso.empresa_id' => $plan['Auditoria']['empresa_id'])));
        //debug($plan);
        $this->set(compact('empresas', 'normagenerals', 'id_auditoria', 'subnormasindices', 'procesos','fechaPlan','auditores'));
    }

    public function continuar($id_auditoria, $id_planauditoria) {
        $this->set(compact('id_planauditoria', 'id_auditoria'));
    }

    public function indices($id_subnorma) {
        //debug($id_subnorma);
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id_auditoria) {
        if ($this->request->is('post')) {
            $this->Planauditoria->create();
            if ($this->Planauditoria->save($this->request->data)) {
                $id = $this->Planauditoria->id;
                $this->Flash->success(__('The planauditoria has been saved.'));
                return $this->redirect(array('controller' => 'indicesplanificacions', 'action' => 'add/' . $id));
            } else {
                $this->Flash->error(__('The planauditoria could not be saved. Please, try again.'));
            }
        }
        //$auditors = $this->Planauditoria->Usuario->find('list');
        $this->set(compact('id_auditoria'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Planauditoria->exists($id)) {
            throw new NotFoundException(__('Invalid planauditoria'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Planauditoria->save($this->request->data)) {
                $this->Flash->success(__('The planauditoria has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The planauditoria could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Planauditoria.' . $this->Planauditoria->primaryKey => $id));
            $this->request->data = $this->Planauditoria->find('first', $options);
        }


        //$auditors = $this->Planauditoria->Usuario->find('list');
        $this->set(compact('auditors'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Planauditoria->id = $id;
        if (!$this->Planauditoria->exists()) {
            throw new NotFoundException(__('Invalid planauditoria'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Planauditoria->delete()) {
            $this->Flash->success(__('The planauditoria has been deleted.'));
        } else {
            $this->Flash->error(__('The planauditoria could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
