<?php
App::uses('AppController', 'Controller');
App::uses('MeioUploadBehavior', 'Model');
/**
 * Causas Controller
 *
 * @property Causa $Causa
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CausasController extends AppController {

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
	public function index($hallasgo_id,$planauditoria_id) {
		$this->Causa->recursive = 0;
		
		
        $this->Paginator->settings = array(
                'conditions' => array('Causa.informe_id' => $hallasgo_id),
                'order' => 'Causa.id',
            'limit' => 5,
            );
		
		$this->set('causas', $this->Paginator->paginate());
		$this->set(compact('hallasgo_id','planauditoria_id'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Causa->exists($id)) {
			throw new NotFoundException(__('Invalid causa'));
		}
		$options = array('conditions' => array('Causa.' . $this->Causa->primaryKey => $id));
		$this->set('causa', $this->Causa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($hallazgo_id, $planauditoria) {
	
		if ($this->request->is('post')) {
			$this->Causa->create();
			if ($this->Causa->save($this->request->data)) {
				$this->Flash->success(__('La Descripción de Causas ha sido registrada.'));
				return $this->redirect(array('action' => 'index/'.$hallazgo_id.'/'.$planauditoria));
			} else {
				$this->Flash->error(__('La Descripción de Causas no ha sido registrada.'));
			}
		}
		$informes = $this->Causa->find('all',array('conditions' => array('Causa.informe_id' => $hallazgo_id),'order' => 'Causa.id'));
		//debug($informes);
		$this->set(compact('informes','hallazgo_id','planauditoria'));
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
		if (!$this->Causa->exists($id)) {
			throw new NotFoundException(__('Invalid causa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Causa->save($this->request->data)) {
				$this->Flash->success(__('The causa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The causa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Causa.' . $this->Causa->primaryKey => $id));
			$this->request->data = $this->Causa->find('first', $options);
		}
		$informes = $this->Causa->Informe->find('list');
		$this->set(compact('informes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Causa->id = $id;
		if (!$this->Causa->exists()) {
			throw new NotFoundException(__('Invalid causa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Causa->delete()) {
			$this->Flash->success(__('The causa has been deleted.'));
		} else {
			$this->Flash->error(__('The causa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
