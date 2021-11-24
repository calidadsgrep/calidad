<?php
App::uses('AppController', 'Controller');
App::uses('Normageneral', 'Model');
/**
 * Listachequeos Controller
 *
 * @property Listachequeo $Listachequeo
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ListachequeosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
public function beforeFilter() {
        parent::beforeFilter();
        /* El loadModel () la función es muy útil cuando es necesario utilizar un modelo que no es el modelo por defecto del 
          controlador o su modelo asociado */
        $this->loadModel('Empresa');
        $this->loadModel('Auditor');
        $this->loadModel('Auditoria');
        //$this->loadModel('Normageneral');
        $this->loadModel('AuditoriasNormagenerals');
        $this->loadModel('Subnormaindice');
        $this->loadModel('Indicesplanificacion');
        $this->loadModel('Subnorma');
        $this->loadModel('Usuario');
    }
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Listachequeo->recursive = 0;
		$this->set('listachequeos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Listachequeo->exists($id)) {
			throw new NotFoundException(__('Invalid listachequeo'));
		}
		$options = array('conditions' => array('Listachequeo.' . $this->Listachequeo->primaryKey => $id));
		$this->set('listachequeo', $this->Listachequeo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($planauditoria_id) {
            $Normageneral = new Normageneral();
                $desnorma = $Normageneral->find('all', array());
                debug($Normageneral->valitionErrors);
		if ($this->request->is('post')) {
			$this->Listachequeo->create();
			if ($this->Listachequeo->save($this->request->data)) {
				$this->Flash->success(__('The listachequeo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The listachequeo could not be saved. Please, try again.'));
			}
		}
		$planauditorias = $this->Listachequeo->Planauditoria->find('all',array('conditions'=>array('Planauditoria.id'=>$planauditoria_id)));
                $p=$planauditorias[0]['Planauditoria']['auditoria_id'];
                $auditoria = $this->Auditoria->find('all',array('conditions'=>array('Auditoria.id'=>$p)));
                foreach ($auditoria as $value) {
                    foreach ($value['AuditoriasNormageneral'] as $value1) {
                        $normasauditoria[]= $value1['normageneral_id'];
                    }
                  
                }
                //debug($normasauditoria);
                
//                foreach ($desnorma as $value00) {
//                debug($value00);
//                }
                
//                $this->Indicesplanificacion->recursive=-1;
//                $ind= $this->Indicesplanificacion->find('all',array('conditions'=>array('Indicesplanificacion.planauditoria_id'=>$planauditoria_id),'fields'=>array('Indicesplanificacion.subnormaindice_id')));
//                foreach ($ind as $value) {
//                    $subnormaindice_id[]=$value['Indicesplanificacion']['subnormaindice_id'];
//                }
//                //debug($subnormaindice_id);
////                $this->Subnormaindice->recursive=1;
//                $subnormas=$this->Subnormaindice->find('all',array('conditions'=>array('Subnormaindice.id'=>$subnormaindice_id)));
//                foreach ($subnormas as $value){
//                    $i[]=$value['Subnormaindice']['descripcion'];
//                    
//                }
//                $subnormas=$this->Auditoria->find('all');
//                debug($plan);
		//$debes = $this->Listachequeo->Debe->find('list');
		$this->set(compact('planauditorias', 'debes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Listachequeo->exists($id)) {
			throw new NotFoundException(__('Invalid listachequeo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Listachequeo->save($this->request->data)) {
				$this->Flash->success(__('The listachequeo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The listachequeo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Listachequeo.' . $this->Listachequeo->primaryKey => $id));
			$this->request->data = $this->Listachequeo->find('first', $options);
		}
		$planauditorias = $this->Listachequeo->Planauditorium->find('list');
		$debes = $this->Listachequeo->Debe->find('list');
		$this->set(compact('planauditorias', 'debes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Listachequeo->id = $id;
		if (!$this->Listachequeo->exists()) {
			throw new NotFoundException(__('Invalid listachequeo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Listachequeo->delete()) {
			$this->Flash->success(__('The listachequeo has been deleted.'));
		} else {
			$this->Flash->error(__('The listachequeo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
