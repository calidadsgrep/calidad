<?php
App::uses('AppController', 'Controller');
/**
 * Subnormas Controller
 *
 * @property Subnorma $Subnorma
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SubnormasController extends AppController {

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
		$this->Subnorma->recursive = 0;
		$this->set('subnormas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Subnorma->exists($id)) {
			throw new NotFoundException(__('Invalid subnorma'));
		}
		$options = array('conditions' => array('Subnorma.' . $this->Subnorma->primaryKey => $id));
		$this->set('subnorma', $this->Subnorma->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subnorma->create();
			if ($this->Subnorma->save($this->request->data)) {
				$this->Flash->success(__('The subnorma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The subnorma could not be saved. Please, try again.'));
			}
		}
		$normagenerals = $this->Subnorma->Normageneral->find('list');
		$this->set(compact('normagenerals'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Subnorma->exists($id)) {
			throw new NotFoundException(__('Invalid subnorma'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Subnorma->save($this->request->data)) {
				$this->Flash->success(__('The subnorma has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The subnorma could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Subnorma.' . $this->Subnorma->primaryKey => $id));
			$this->request->data = $this->Subnorma->find('first', $options);
		}
		$normagenerals = $this->Subnorma->Normageneral->find('list');
		$this->set(compact('normagenerals'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Subnorma->id = $id;
		if (!$this->Subnorma->exists()) {
			throw new NotFoundException(__('Invalid subnorma'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Subnorma->delete()) {
			$this->Flash->success(__('The subnorma has been deleted.'));
		} else {
			$this->Flash->error(__('The subnorma could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
