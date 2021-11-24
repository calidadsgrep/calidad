<?php

App::uses('AppController', 'Controller');

/**
 * Listas Controller
 *
 * @property Lista $Lista
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ListasController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        /* El loadModel () la función es muy útil cuando es necesario utilizar un modelo que no es el modelo por defecto del 
          controlador o su modelo asociado */
        $this->loadModel('Informe');

        //$this->loadModel('Proceso');
    }

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Flash', 'Session');

    /**
     * index method
     *
     * @return void
     */
    public function index($planauditoria_id) {
        
        $this->Lista->recursive = 0;
        $this->Paginator->settings = array(
                'conditions' => array('Lista.planauditoria_id' => $planauditoria_id),
                'order' => 'Lista.planauditoria_id',
            'limit' => 5,
            );
        $this->set('listas', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Lista->exists($id)) {
            throw new NotFoundException(__('Invalid lista'));
        }
        $options = array('conditions' => array('Lista.' . $this->Lista->primaryKey => $id));
        $this->set('lista', $this->Lista->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($planauditoria_id) {
        if ($this->request->is('post')) {
            $this->Lista->create();
            if ($this->Lista->save($this->request->data)) {
                $this->Flash->success(__('The lista has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('The lista could not be saved. Please, try again.'));
            }
        }
        $listas = $this->Lista->find('all', array('conditions' => array('Lista.planauditoria_id' => $planauditoria_id), 'order' => 'Lista.debe_id'));
        $planauditorias = $this->Lista->Planauditoria->find('list');
        $debes = $this->Lista->Debe->find('list');
        $this->set(compact('planauditorias', 'debes', 'listas'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    
     public function editar($id = null,$planauditoria_id) {
         
        if (!$this->Lista->exists($id)) {
            throw new NotFoundException(__('Invalid informe'));
        }
        
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Lista->save($this->request->data)) {
                $this->Flash->success(__('La corrección propuesta ha sido registrada con éxito.'));
                $lugar='RespuestaHallazgo';
                return $this->redirect(array('controller'=>'informes','action' => 'index/'.$planauditoria_id));
            } else {
                $this->Flash->error(__('La corrección propuesta no ha sido registrada con éxito..'));
            }
        } else {
            $options = array('conditions' => array('Lista.' . $this->Lista->primaryKey => $id));
            $this->request->data = $this->Lista->find('first', $options);
        }
        $listas = $this->Lista->find('list');
        $this->set(compact('listas','id'));
    }
    
    
    
    
    
    
    public function edit($planauditoria_id = null) {
         $auditoria=$this->Session->read('AUD_ID');
        if ($this->request->is('post')) {
          //debug($this->request->data['Lista']);
          
            foreach ($this->request->data['Lista'] as $value) {
                if (@$value['estado'] == 'si') {
                    //debug($value);
                       $this->Informe->create();
                        $this->Lista->id = $value['id'];
                        $this->Lista->saveField('estado', @$value['estado']);
                        $dato['Informe']['lista_id'] = $value['id'];
                        $dato['Informe']['planauditoria_id'] = $planauditoria_id;
                        
                        $this->Informe->save($dato);
                        $this->Flash->success(__('El hallazgo al numeral fue generado con éxito'));
                    } else {
                    $this->Lista->id = $value['id'];
                    $this->Lista->saveField('observaciones', $value['observaciones']);
                    $this->Lista->saveField('estado', @$value['estado']);
                    $this->Lista->saveField('tipo', $value['tipo']);
                    $this->Flash->success(__('Las anotacion(es) al numeral fue generado con éxito'));
                }
            }
        }

        $listas = $this->Lista->find('all', array('conditions' => array('Lista.planauditoria_id' => $planauditoria_id, 'Lista.estado' => ''), 'order' => 'Lista.debe_id'));

        $planauditorias = $this->Lista->Planauditoria->find('list');
        $debes = $this->Lista->Debe->find('list');
        $this->set(compact('planauditorias', 'debes', 'listas','planauditoria_id','auditoria'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Lista->id = $id;
        if (!$this->Lista->exists()) {
            throw new NotFoundException(__('Invalid lista'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Lista->delete()) {
            $this->Flash->success(__('The lista has been deleted.'));
        } else {
            $this->Flash->error(__('The lista could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
