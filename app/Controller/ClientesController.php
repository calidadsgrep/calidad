<?php
App::uses('AppController', 'Controller');
/**
 * clientes Controller
 *
 * @property Cliente $Cliente
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ClientesController extends AppController {

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
	public function index() {
	$user = $this->Session->read('Usuario');
	$userTipo=$user['Usuario']['nivel_id'];
	
	//buscamos según el tipo de usuario
	//if($userTipo == 1){
	$this->Cliente->recursive = 0;
	   $this->set('clientes', $this->Paginator->paginate());
	
	//}
	/*if($userTipo == 2 ){
             
             $this->Cliente->recursive = 0;
             $this->Paginator->settings = array(
                'conditions' => array('Cliente.tratamiento' => 'cliente'),
                'limit' => 20,
               
            );
            $this->set('clientes', $this->Paginator->paginate());
            $data = $this->Paginator->paginate('Cliente');
            $this->set(compact('user'));
             
             }
             $this->set(compact('userTipo'));*/
      
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid Cliente'));
		}
		$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
		$this->set('Cliente', $this->Cliente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
             $this->layout='vacio';
             $user = $this->Session->read('Usuario');
	     $userTipo=$user['Usuario']['nivel_id'];
		if ($this->request->is('post')) {
			$this->Cliente->create();
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('El registro tuvo éxito'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no tuvo éxito'));
			}
		}
		$auditors = $this->Cliente->find('list');
		$this->set(compact('auditors','userTipo'));
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
        $user = $this->Session->read('Usuario');
	     $userTipo=$user['Usuario']['nivel_id'];
		if (!$this->Cliente->exists($id)) {
			throw new NotFoundException(__('Invalid Cliente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cliente->save($this->request->data)) {
				$this->Session->setFlash(__('la información de la Cliente fue actualizada con éxito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('la información de la Cliente  no fue actualizada con éxito.'));
			}
		} else {
			$options = array('conditions' => array('Cliente.' . $this->Cliente->primaryKey => $id));
			$this->request->data = $this->Cliente->find('first', $options);
		}
		$auditors = $this->Cliente->find('list');
		$this->set(compact('auditors','userTipo'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cliente->id = $id;
		if (!$this->Cliente->exists()) {
			throw new NotFoundException(__('Invalid Cliente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cliente->delete()) {
			$this->Session->setFlash(__('La Cliente ha sido eliminada.'));
		} else {
			$this->Session->setFlash(__('La Cliente no ha sido eliminada.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
