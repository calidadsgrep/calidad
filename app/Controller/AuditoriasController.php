<?php

App::uses('AppController', 'Controller');

/**
 * Auditorias Controller
 *
 * @property Auditoria $Auditoria
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class AuditoriasController extends AppController {

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
        $this->loadModel('AuditoriasNormageneral');
        $this->loadModel('Auditor');
        $this->loadModel('Normageneral');
        $this->loadModel('Planauditoria');
        $this->loadModel('Usuario');
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
    $user = $this->Session->read('Usuario');
    
   if($user['Usuario']['nivel_id']!=4){
   $this->Auditoria->recursive = 0;
   $this->set('auditorias', $this->Paginator->paginate());
   }else{
   
  //debug($user);
   $this->Usuario->recursive = 0;
            $this->Paginator->settings = array(
                'conditions' => array('Auditoria.empresa_id' => $user['Empresa']['id']),
                'limit' => 20,
                'order' => 'Auditoria.created',
            );
            $this->set('auditorias', $this->Paginator->paginate());
            $data = $this->Paginator->paginate('Auditoria');
            $this->set(compact('user'));
   }
        $this->set(compact('user'));
         
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function asignar() {
        $user = $this->Session->read('Usuario');
        //debug($user);
        $empresa_id=$user['Empresa']['id'];
        //debug($empresa_id);
        $id_usuario = $user['Usuario']['id'];
        if ($this->request->is('post')) {
            $this->Auditoria->create();
            if ($this->Auditoria->save($this->request->data)) {
                $id = $this->Auditoria->id;
                if (!empty($this->request->data['AuditoriasNormageneral'])) {
                    foreach ($this->request->data['AuditoriasNormageneral'] as $value) {
                        $this->Auditoria->AuditoriasNormageneral->create();
                        $dato['AuditoriasNormageneral'] = $value;
                        $dato['AuditoriasNormageneral']['auditoria_id'] = $id;
                        $this->Auditoria->AuditoriasNormageneral->save($dato);
                    }
                }
                $this->Session->setFlash(__('La auditoria ha sido registrada con éxito.'));
                return $this->redirect(array('action' => 'asignar2/' . $id));
            } else {
                $this->Session->setFlash(__('The auditoria could not be saved. Please, try again.'));
            }
        }

        $usuarios = $this->Auditoria->Usuario->find('list',array('conditions'=>array('Usuario.nivel_id'=>3)));
        $empresas = $this->Auditoria->Empresa->find('list',array('conditions'=>array('Empresa.empresa_id'=>$empresa_id)));
        //debug($empresas);
        $normagenerals = $this->Normageneral->find('all', array('conditions' => array(), 'order' => 'descripcion'));
        $this->set(compact('empresas', 'normagenerals', 'auditors','id_usuario','usuarios'));
    }
    
  public function asignar2($id) {
        if (!$this->Auditoria->exists($id)) {
            throw new NotFoundException(__('Invalid auditoria'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Auditoria->save($this->request->data)) {
                $this->Session->setFlash(__('Los detalles de la auditoria han sido creados con éxito.'));
                return $this->redirect(array('controller'=>'planauditorias','action' => 'asignar3/'.$id.'/'));
            } else {
                $this->Session->setFlash(__('La auditoria no ha sido creada con éxito.'));
            }
        } else {
            $options = array('conditions' => array('Auditoria.' . $this->Auditoria->primaryKey => $id));
            $this->request->data = $this->Auditoria->find('first', $options);
        }
        $tipo = $this->Auditoria->read('tipo_auditoria',$id);
        
        $TIPO_AUD= $tipo['Auditoria']['tipo_auditoria'];
        $empresas = $this->Auditoria->Empresa->find('list');
       // debug($empresas);
        $normagenerals = $this->Normageneral->find('list');
        $this->set(compact('auditors', 'id','id_auditoria','TIPO_AUD'));
    }
    
    
    public function view($id = null) {
        if (!$this->Auditoria->exists($id)) {
            throw new NotFoundException(__('Invalid auditoria'));
        }
        $options = array('conditions' => array('Auditoria.' . $this->Auditoria->primaryKey => $id));
        $this->set('auditoria', $this->Auditoria->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Auditoria->create();
            if ($this->Auditoria->save($this->request->data)) {
                $id = $this->Auditoria->id;
                $this->Session->setFlash(__('La auditoria ha sido creada con éxito.'));
                return $this->redirect(array('controller' => 'subnormas', 'action' => 'planauditoria/' . $id));
            } else {
               $this->Session->setFlash(__('La auditoria ha sido creada con éxito.'));
            }
        }
        $empresas = $this->Auditoria->Empresa->find('list');
        debug($empresas);
        $normagenerals = $this->Normageneral->find('list');
        $this->set(compact('empresas', 'normagenerals'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
    $user = $this->Session->read('Usuario');
        //debug($user);
        $id_usuario = $user['Usuario']['id'];
        if (!$this->Auditoria->exists($id)) {
            throw new NotFoundException(__('Invalid auditoria'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Auditoria->save($this->request->data)) {
               $this->Session->setFlash(__('La(s) observacion(es) han sido adicionadas a la auditoria con éxito.'));
                return $this->redirect(array('controller'=>'planauditorias','action' => 'view/'.$id));
            } else {
                $this->Session->setFlash(__('The auditoria could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Auditoria.' . $this->Auditoria->primaryKey => $id));
            $this->request->data = $this->Auditoria->find('first', $options);
        }
        $auditorias = $this->Auditoria->read('tipo_auditoria',$id);
        $auditoriaTipo=$auditorias['Auditoria']['tipo_auditoria'];
        //debug($auditoriaTipo);
        $normagenerals = $this->Normageneral->find('list');
        $this->set(compact('empresas', 'normagenerals','auditoriaTipo','id_usuario'));
    }

    public function editar($id = null) {
    $user = $this->Session->read('Usuario');
        //debug($user);
        $id_usuario = $user['Usuario']['id'];
        $this->layout='vacio';
        if (!$this->Auditoria->exists($id)) {
            throw new NotFoundException(__('Invalid auditoria'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Auditoria->save($this->request->data)) {
                $this->Session->setFlash(__('The auditoria has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The auditoria could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Auditoria.' . $this->Auditoria->primaryKey => $id));
            $this->request->data = $this->Auditoria->find('first', $options);
        }
        $empresas = $this->Auditoria->Empresa->find('list');
        $normagenerals = $this->Normageneral->find('all', array('conditions' => array(), 'order' => 'descripcion'));
        $this->set(compact('empresas', 'normagenerals', 'auditors','id_usuario','usuarios'));
    }
    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Auditoria->id = $id;
        if (!$this->Auditoria->exists()) {
            throw new NotFoundException(__('Invalid auditoria'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Auditoria->delete()) {
            $this->Session->setFlash(__('The auditoria has been deleted.'));
        } else {
            $this->Session->setFlash(__('The auditoria could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
