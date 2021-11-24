<?php
App::uses('AppController', 'Controller');
/**
 * Actividades Controller
 *
 * @property Actividade $Actividade
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ActividadesController extends AppController {

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
	public function index($causa_id,$posicion) {
	$this->layout='vacio';
				
		$this->Actividade->recursive = 0;
		
		
        $this->Paginator->settings = array(
                'conditions' => array('Actividade.causa_id' => $causa_id),
                'order' => 'Actividade.id',
            'limit' => 5,
            );
		
		$this->set('actividades', $this->Paginator->paginate());
		$this->set(compact('posicion'));
	}
		
	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Actividade->exists($id)) {
			throw new NotFoundException(__('Invalid actividade'));
		}
		$options = array('conditions' => array('Actividade.' . $this->Actividade->primaryKey => $id));
		$this->set('actividade', $this->Actividade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($causa_id ,$informe_id,$planauditoria_id) {
	$this->layout='vacio';
	//debug($causa_id);
	//debug($planauditoria_id);
		if ($this->request->is('post')) {
			$this->Actividade->create();
			if ($this->Actividade->save($this->request->data)) {
				$this->Flash->success(__('The actividade has been saved.'));
				return $this->redirect(array('controller'=>'causas','action' => 'index/'.$informe_id .'/'.$planauditoria_id));
			} else {
				$this->Flash->error(__('The actividade could not be saved. Please, try again.'));
			}
		}
		$causas = $this->Actividade->Causa->find('list');
		$this->set(compact('causas','causa_id','planauditoria_id'));
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
		if (!$this->Actividade->exists($id)) {
			throw new NotFoundException(__('Invalid actividade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Actividade->save($this->request->data)) {
				$this->Flash->success(__('The actividade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actividade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Actividade.' . $this->Actividade->primaryKey => $id));
			$this->request->data = $this->Actividade->find('first', $options);
		}
		$causas = $this->Actividade->Causa->find('list');
		$this->set(compact('causas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Actividade->id = $id;
		if (!$this->Actividade->exists()) {
			throw new NotFoundException(__('Invalid actividade'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Actividade->delete()) {
			$this->Flash->success(__('The actividade has been deleted.'));
		} else {
			$this->Flash->error(__('The actividade could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
