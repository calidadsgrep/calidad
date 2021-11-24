<?php
App::uses('AppController', 'Controller');
/**
 * Procesos Controller
 *
 * @property Proceso $Proceso
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property AclComponent $Acl
 * @property SessionComponent $Session
 */
class ProcesosController extends AppController {

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
	public function index($Cliente) {
            $this->layout='vacio';
		$this->Proceso->recursive = 0;
                $this->Paginator->settings = array(
                'conditions' => array('Proceso.empresa_id' => $Cliente),
                'limit' => 5,
                'order' => 'Proceso.empresa_id ',
            );
		$this->set('procesos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
            
		if (!$this->Proceso->exists($id)) {
			throw new NotFoundException(__('Invalid proceso'));
		}
		$options = array('conditions' => array('Proceso.' . $this->Proceso->primaryKey => $id));
		$this->set('proceso', $this->Proceso->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($empresa) {
             $this->layout='vacio';
		if ($this->request->is('post')) {
			$this->Proceso->create();
			if ($this->Proceso->save($this->request->data)) {
                        $this->Session->setFlash('El Proceso fue registrado con éxito.');
				return $this->redirect(array('controller'=>'empresas','action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Proceso no fue registrado con éxito.'));
			}
		}
		$empresas = $this->Proceso->Empresa->find('list');
		$this->set(compact('empresas','empresa'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
             $this->layout='vacio';
		if (!$this->Proceso->exists($id)) {
			throw new NotFoundException(__('Invalid proceso'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proceso->save($this->request->data)) {
				$this->Session->setFlash('El Proceso fue Actualizado con éxito.');
				return $this->redirect(array('controller'=>'empresas','action' => 'index'));
			} else {
				$this->Flash->error(__('The proceso could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Proceso.' . $this->Proceso->primaryKey => $id));
			$this->request->data = $this->Proceso->find('first', $options);
		}
		$empresas = $this->Proceso->Empresa->find('list');
		$this->set(compact('empresas','id'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Proceso->id = $id;
		if (!$this->Proceso->exists()) {
			throw new NotFoundException(__('Invalid proceso'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proceso->delete()) {
			$this->Session->setFlash('El Proceso fue Eliminado con éxito.');
				
		} else {
			$this->Session->setFlash(__('El Proceso no fue Eliminado con éxito'));
		}
		return $this->redirect(array('controller'=>'empresa','action' => 'index'));
	}
}
