<?php
App::uses('AppController', 'Controller');
/**
 * Debes Controller
 *
 * @property Debe $Debe
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class DebesController extends AppController {

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
		$this->Debe->recursive = 0;
		$this->set('debes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Debe->exists($id)) {
			throw new NotFoundException(__('Invalid debe'));
		}
		$options = array('conditions' => array('Debe.' . $this->Debe->primaryKey => $id));
		$this->set('debe', $this->Debe->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Debe->create();
			if ($this->Debe->save($this->request->data)) {
				$this->Flash->success(__('The debe has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The debe could not be saved. Please, try again.'));
			}
		}
		$subnormaindices = $this->Debe->Subnormaindice->find('list');
		$this->set(compact('subnormaindices'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Debe->exists($id)) {
			throw new NotFoundException(__('Invalid debe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Debe->save($this->request->data)) {
				$this->Flash->success(__('The debe has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The debe could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Debe.' . $this->Debe->primaryKey => $id));
			$this->request->data = $this->Debe->find('first', $options);
		}
		$subnormaindices = $this->Debe->Subnormaindice->find('list');
		$this->set(compact('subnormaindices'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Debe->id = $id;
		if (!$this->Debe->exists()) {
			throw new NotFoundException(__('Invalid debe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Debe->delete()) {
			$this->Flash->success(__('The debe has been deleted.'));
		} else {
			$this->Flash->error(__('The debe could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
