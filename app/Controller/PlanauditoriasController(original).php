<?php
App::uses('AppController', 'Controller');
/**
 * Planauditorias Controller
 *
 * @property Planauditoria $Planauditoria
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PlanauditoriasController extends AppController {

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
		$this->Planauditoria->recursive = 0;
		$this->set('planauditorias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Planauditoria->exists($id)) {
			throw new NotFoundException(__('Invalid planauditoria'));
		}
		$options = array('conditions' => array('Planauditoria.' . $this->Planauditoria->primaryKey => $id));
		$this->set('planauditoria', $this->Planauditoria->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Planauditoria->create();
			if ($this->Planauditoria->save($this->request->data)) {
				$this->Flash->success(__('The planauditoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The planauditoria could not be saved. Please, try again.'));
			}
		}
		$auditorias = $this->Planauditoria->Auditorium->find('list');
		$procesos = $this->Planauditoria->Proceso->find('list');
		$this->set(compact('auditorias', 'procesos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Planauditoria->exists($id)) {
			throw new NotFoundException(__('Invalid planauditoria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Planauditoria->save($this->request->data)) {
				$this->Flash->success(__('The planauditoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The planauditoria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Planauditoria.' . $this->Planauditoria->primaryKey => $id));
			$this->request->data = $this->Planauditoria->find('first', $options);
		}
		$auditorias = $this->Planauditoria->Auditorium->find('list');
		$procesos = $this->Planauditoria->Proceso->find('list');
		$this->set(compact('auditorias', 'procesos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Planauditoria->id = $id;
		if (!$this->Planauditoria->exists()) {
			throw new NotFoundException(__('Invalid planauditoria'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Planauditoria->delete()) {
			$this->Flash->success(__('The planauditoria has been deleted.'));
		} else {
			$this->Flash->error(__('The planauditoria could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
