<?php
App::uses('AppController', 'Controller');
/**
 * Subnormaindices Controller
 *
 * @property Subnormaindex $Subnormaindex
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SubnormaindicesController extends AppController {

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
		$this->Subnormaindex->recursive = 0;
		$this->set('subnormaindices', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Subnormaindex->exists($id)) {
			throw new NotFoundException(__('Invalid subnormaindex'));
		}
		$options = array('conditions' => array('Subnormaindex.' . $this->Subnormaindex->primaryKey => $id));
		$this->set('subnormaindex', $this->Subnormaindex->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Subnormaindex->create();
			if ($this->Subnormaindex->save($this->request->data)) {
				$this->Flash->success(__('The subnormaindex has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The subnormaindex could not be saved. Please, try again.'));
			}
		}
		$subnormas = $this->Subnormaindex->Subnorma->find('list');
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
		if (!$this->Subnormaindex->exists($id)) {
			throw new NotFoundException(__('Invalid subnormaindex'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Subnormaindex->save($this->request->data)) {
				$this->Flash->success(__('The subnormaindex has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The subnormaindex could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Subnormaindex.' . $this->Subnormaindex->primaryKey => $id));
			$this->request->data = $this->Subnormaindex->find('first', $options);
		}
		$subnormas = $this->Subnormaindex->Subnorma->find('list');
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
		$this->Subnormaindex->id = $id;
		if (!$this->Subnormaindex->exists()) {
			throw new NotFoundException(__('Invalid subnormaindex'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Subnormaindex->delete()) {
			$this->Flash->success(__('The subnormaindex has been deleted.'));
		} else {
			$this->Flash->error(__('The subnormaindex could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
