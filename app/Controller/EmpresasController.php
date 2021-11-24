<?php
App::uses('AppController', 'Controller');
/**
 * Empresas Controller
 *
 * @property Empresa $Empresa
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class EmpresasController extends AppController {

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
	if($userTipo == 1 ){
             
             $this->Empresa->recursive = 0;
             $this->Paginator->settings = array(
                'conditions' => array('Empresa.tratamiento' => 'consultora'),
                'limit' => 20,
            
               
            );
            $this->set('empresas', $this->Paginator->paginate());
            $data = $this->Paginator->paginate('Empresa');
            $this->set(compact('user'));
            }
	 if($userTipo == 2 ){
             
             $this->Empresa->recursive = 0;
             $this->Paginator->settings = array(
                'conditions' => array('Empresa.tratamiento' => 'cliente'),
                'limit' => 20,
               
            );
            $this->set('empresas', $this->Paginator->paginate());
            $data = $this->Paginator->paginate('Empresa');
            $this->set(compact('user'));
             
             }
             $this->set(compact('userTipo'));
      
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Invalid empresa'));
		}
		$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
		$this->set('empresa', $this->Empresa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
            //$this->layout='vacio';
             $user = $this->Session->read('Usuario');
	     $userTipo=$user['Usuario']['nivel_id'];
		if ($this->request->is('post')) {
			$this->Empresa->create();
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('El registro tuvo éxito'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El registro no tuvo éxito'));
			}
		}
		$auditors = $this->Empresa->Usuario->find('list');
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
		if (!$this->Empresa->exists($id)) {
			throw new NotFoundException(__('Invalid empresa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Empresa->save($this->request->data)) {
				$this->Session->setFlash(__('la información de la empresa fue actualizada con éxito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('la información de la empresa  no fue actualizada con éxito.'));
			}
		} else {
			$options = array('conditions' => array('Empresa.' . $this->Empresa->primaryKey => $id));
			$this->request->data = $this->Empresa->find('first', $options);
		}
		$this->set(compact('auditors','user'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Empresa->id = $id;
		if (!$this->Empresa->exists()) {
			throw new NotFoundException(__('Invalid empresa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Empresa->delete()) {
			$this->Session->setFlash(__('La empresa ha sido eliminada.'));
		} else {
			$this->Session->setFlash(__('La empresa no ha sido eliminada.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
