<?php
App::uses('AppController', 'Controller');
/**
 * AuditoriasNormagenerals Controller
 *
 * @property AuditoriasNormageneral $AuditoriasNormageneral
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class AuditoriasNormageneralsController extends AppController {

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
		$this->AuditoriasNormageneral->recursive = 0;
		$this->set('auditoriasNormagenerals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AuditoriasNormageneral->exists($id)) {
			throw new NotFoundException(__('Invalid auditorias normageneral'));
		}
		$options = array('conditions' => array('AuditoriasNormageneral.' . $this->AuditoriasNormageneral->primaryKey => $id));
		$this->set('auditoriasNormageneral', $this->AuditoriasNormageneral->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AuditoriasNormageneral->create();
			if ($this->AuditoriasNormageneral->save($this->request->data)) {
				$this->Flash->success(__('The auditorias normageneral has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The auditorias normageneral could not be saved. Please, try again.'));
			}
		}
		$auditorias = $this->AuditoriasNormageneral->Auditorium->find('list');
		$normagenerals = $this->AuditoriasNormageneral->Normageneral->find('list');
		$this->set(compact('auditorias', 'normagenerals'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AuditoriasNormageneral->exists($id)) {
			throw new NotFoundException(__('Invalid auditorias normageneral'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AuditoriasNormageneral->save($this->request->data)) {
				$this->Flash->success(__('The auditorias normageneral has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The auditorias normageneral could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AuditoriasNormageneral.' . $this->AuditoriasNormageneral->primaryKey => $id));
			$this->request->data = $this->AuditoriasNormageneral->find('first', $options);
		}
		$auditorias = $this->AuditoriasNormageneral->Auditorium->find('list');
		$normagenerals = $this->AuditoriasNormageneral->Normageneral->find('list');
		$this->set(compact('auditorias', 'normagenerals'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AuditoriasNormageneral->id = $id;
		if (!$this->AuditoriasNormageneral->exists()) {
			throw new NotFoundException(__('Invalid auditorias normageneral'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AuditoriasNormageneral->delete()) {
			$this->Flash->success(__('The auditorias normageneral has been deleted.'));
		} else {
			$this->Flash->error(__('The auditorias normageneral could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
