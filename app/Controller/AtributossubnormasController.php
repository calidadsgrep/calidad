<?php
App::uses('AppController', 'Controller');
/**
 * Atributossubnormas Controller
 *
 * @property Atributossubnorma $Atributossubnorma
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class AtributossubnormasController extends AppController {

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
		$this->Atributossubnorma->recursive = 0;
		$this->set('atributossubnormas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Atributossubnorma->exists($id)) {
			throw new NotFoundException(__('Invalid atributossubnorma'));
		}
		$options = array('conditions' => array('Atributossubnorma.' . $this->Atributossubnorma->primaryKey => $id));
		$this->set('atributossubnorma', $this->Atributossubnorma->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Atributossubnorma->create();
			if ($this->Atributossubnorma->save($this->request->data)) {
				$this->Flash->success(__('The atributossubnorma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The atributossubnorma could not be saved. Please, try again.'));
			}
		}
		$subnormas = $this->Atributossubnorma->Subnorma->find('list');
		$this->set(compact('subnormas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Atributossubnorma->exists($id)) {
			throw new NotFoundException(__('Invalid atributossubnorma'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Atributossubnorma->save($this->request->data)) {
				$this->Flash->success(__('The atributossubnorma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The atributossubnorma could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Atributossubnorma.' . $this->Atributossubnorma->primaryKey => $id));
			$this->request->data = $this->Atributossubnorma->find('first', $options);
		}
		$subnormas = $this->Atributossubnorma->Subnorma->find('list');
		$this->set(compact('subnormas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Atributossubnorma->id = $id;
		if (!$this->Atributossubnorma->exists()) {
			throw new NotFoundException(__('Invalid atributossubnorma'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Atributossubnorma->delete()) {
			$this->Flash->success(__('The atributossubnorma has been deleted.'));
		} else {
			$this->Flash->error(__('The atributossubnorma could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
