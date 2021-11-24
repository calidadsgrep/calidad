<?php
App::uses('AppController', 'Controller');
/**
 * Normagenerals Controller
 *
 * @property Normageneral $Normageneral
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class NormageneralsController extends AppController {

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
		$this->Normageneral->recursive = 0;
		$this->set('normagenerals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Normageneral->exists($id)) {
			throw new NotFoundException(__('Invalid normageneral'));
		}
		$options = array('conditions' => array('Normageneral.' . $this->Normageneral->primaryKey => $id));
		$this->set('normageneral', $this->Normageneral->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
$this->layout='vacio';
		if ($this->request->is('post')) {
			$this->Normageneral->create();
			if ($this->Normageneral->save($this->request->data)) {
				$this->Flash->success(__('The normageneral has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The normageneral could not be saved. Please, try again.'));
			}
		}
		$auditorias = $this->Normageneral->Auditorium->find('list');
		$this->set(compact('auditorias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Normageneral->exists($id)) {
			throw new NotFoundException(__('Invalid normageneral'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Normageneral->save($this->request->data)) {
				$this->Flash->success(__('The normageneral has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The normageneral could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Normageneral.' . $this->Normageneral->primaryKey => $id));
			$this->request->data = $this->Normageneral->find('first', $options);
		}
		$auditorias = $this->Normageneral->Auditorium->find('list');
		$this->set(compact('auditorias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Normageneral->id = $id;
		if (!$this->Normageneral->exists()) {
			throw new NotFoundException(__('Invalid normageneral'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Normageneral->delete()) {
			$this->Flash->success(__('The normageneral has been deleted.'));
		} else {
			$this->Flash->error(__('The normageneral could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
