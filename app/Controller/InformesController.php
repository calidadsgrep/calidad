<?php

App::uses('AppController', 'Controller');
App::uses('MeioUploadBehavior', 'Model');

/**
 * Informes Controller
 *
 * @property Informe $Informe
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class InformesController extends AppController {

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
        $this->loadModel('Empresa');
        $this->loadModel('Auditor');
        $this->loadModel('Auditoria');
        $this->loadModel('Normageneral');
        $this->loadModel('AuditoriasNormagenerals');
        $this->loadModel('Subnormaindice');
        $this->loadModel('Indicesplanificacion');
        $this->loadModel('Subnorma');
        $this->loadModel('Causa');
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
     
     public function indexcorreos($planauditoria_id=null, $lugar=null) {
      
        $this->set(compact('lugar','planauditoria_id'));
    }
     
     public function indexgenerar($planauditoria_id=null, $lugar=null) {
      $user = $this->Session->read('Usuario');
      $empresa= $user['Usuario']['empresa_id'];
       //debug($user);
        $this->set(compact('planauditoria_id','lugar','empresa'));
    }
    public function index1($planauditoria_id) {
        $this->Informe->recursive = 0;
        $this->Paginator->settings = array(
                'conditions' => array('Informe.planauditoria_id' => $planauditoria_id),
                'order' => 'Informe.lista_id',
            'limit' => 3,
            );
        $listas = $this->Informe->Lista->find('all', array('conditions' => array('Lista.planauditoria_id' => $planauditoria_id), 'order' => 'Lista.debe_id'));
        $aud=$listas[0]['Planauditoria']['auditoria_id'];
        //debug($aud);
        $auditoria = $this->Auditoria->find('all', array('conditions' => array('Auditoria.id' => $aud)));
        //debug($auditoria);
        $this->set(compact('auditoria','planauditoria_id'));
        $this->set('informes', $this->Paginator->paginate());
        
    }
    
    
    public function index($planauditoria_id) {
    $user = $this->Session->read('Usuario');
    //debug($user);
    $nivel= $user['Usuario']['nivel_id'];
        $this->Informe->recursive = 0;
        $this->Paginator->settings = array(
                'conditions' => array('Informe.planauditoria_id' => $planauditoria_id),
                'order' => 'Informe.lista_id',
            'limit' => 5,
            );
        $listas = $this->Informe->Lista->find('all', array('conditions' => array('Lista.planauditoria_id' => $planauditoria_id), 'order' => 'Lista.debe_id'));
        $aud=$listas[0]['Planauditoria']['auditoria_id'];
        foreach($listas as $lista){
        $lis[]=$lista['Debe']['subnormaindice_id'];
        }
        
        $subnormas=$this->Subnormaindice->find('all',array('conditions'=>array('Subnormaindice.id'=>$lis)));
        //debug($subnormas);
        //debug($listas);
        $auditoria = $this->Auditoria->find('first', array('conditions' => array('Auditoria.id' => $aud)));
       //debug($auditoria);
        $this->set(compact('auditoria','planauditoria_id','listas','subnormas','nivel'));
        $this->set('informes', $this->Paginator->paginate());
        
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null,$planauditoria_id) {
        if (!$this->Informe->exists($id)) {
            throw new NotFoundException(__('Invalid informe'));
        }
        $causas=$this->Causa->find('all',array('conditions'=>array('Causa.informe_id'=>$id)));
        //debug($causas);
        $options = array('conditions' => array('Informe.' . $this->Informe->primaryKey => $id));
        $this->set(compact('planauditoria_id','causas'));
        $this->set('informe', $this->Informe->find('first', $options));
        
        }

    /**
     * add method
     *
     * @return void
     */
    public function add($planauditoria_id) {
    //$hallazgos=$this->Informe->find('all',array('conditions'=>array('Informe.planauditoria_id'=>$planauditoria_id)));
   // if(empty($hallazgos)){
        if ($this->request->is('post')) {
           if (!empty($this->request->data['Informe'])) {
                foreach ($this->request->data['Informe'] as $value) {
                    //debug($value['observacion']);
                    if (!empty($value['observaciones'])) {
                        $this->Informe->create();
                        $dato['Informe'] = $value;
                        $this->Informe->save($dato);
                    }
                }
            } 
            $lugar='GenerarHallazgos';
            $this->Flash->success(__('El o los hallazgos fueron generados y registrados con éxito.'));
            return $this->redirect(array('controller'=>'planauditorias','action' => 'index/'.$planauditoria_id));
        }
        $listas = $this->Informe->Lista->find('all', array('conditions' => array('Lista.planauditoria_id' => $planauditoria_id), 'order' => 'Lista.debe_id'));
        $hallazgos=$this->Informe->find('all',array('conditions'=>array('Informe.planauditoria_id'=>$planauditoria_id)));
        //debug($hallazgos);
        $this->set(compact('listas'));
        //}else{
        // $this->Flash->success(__('El o los hallazgos fueron generados y registrados con éxito.'));
        // return $this->redirect(array('controller'=>'informes','action' => 'index/'.$planauditoria_id));
        
       // }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null, $planauditoria_id) {
        if (!$this->Informe->exists($id)) {
            throw new NotFoundException(__('Invalid informe'));
        }
        
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Informe->save($this->request->data)) {
                $this->Flash->success(__('La corrección propuesta ha sido registrada con éxito.'));
                $lugar='RespuestaHallazgo';
                return $this->redirect(array('controller'=>'informes','action' => 'index/'.$planauditoria_id));
            } else {
                $this->Flash->error(__('La corrección propuesta no ha sido registrada con éxito..'));
            }
        } else {
            $options = array('conditions' => array('Informe.' . $this->Informe->primaryKey => $id));
            $this->request->data = $this->Informe->find('first', $options);
        }
        $listas = $this->Informe->Lista->find('list');
        $this->set(compact('listas','id'));
    }
    
    public function editcorreccion($id = null, $planauditoria_id) {
        if (!$this->Informe->exists($id)) {
            throw new NotFoundException(__('Invalid informe'));
        }
        
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Informe->save($this->request->data)) {
                $this->Flash->success(__('La corrección propuesta ha sido registrada con éxito.'));
                $lugar='RespuestaHallazgo';
                return $this->redirect(array('controller'=>'informes','action' => 'index/'.$planauditoria_id));
            } else {
                $this->Flash->error(__('La corrección propuesta no ha sido registrada con éxito..'));
            }
        } else {
            $options = array('conditions' => array('Informe.' . $this->Informe->primaryKey => $id));
            $this->request->data = $this->Informe->find('first', $options);
        }
        $listas = $this->Informe->Lista->find('list');
        $this->set(compact('listas','id'));
    }
    
    
    public function validacion($id = null, $planauditoria_id) {
        if (!$this->Informe->exists($id)) {
            throw new NotFoundException(__('Invalid informe'));
        }
        
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Informe->save($this->request->data)) {
                $this->Flash->success(__('La validacion a las respuestas fueron registradas con éxito.'));
                $lugar='ValidacionHallazgo';
                return $this->redirect(array('action' => 'validacion/'.$id.'/'.$planauditoria_id));
            } else {
                $this->Flash->error(__('The informe could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Informe.' . $this->Informe->primaryKey => $id));
            $this->request->data = $this->Informe->find('first', $options);
        }
        $listas = $this->Informe->Lista->find('list');
        $this->set(compact('listas'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Informe->id = $id;
        if (!$this->Informe->exists()) {
            throw new NotFoundException(__('Invalid informe'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Informe->delete()) {
            $this->Flash->success(__('The informe has been deleted.'));
        } else {
            $this->Flash->error(__('The informe could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
