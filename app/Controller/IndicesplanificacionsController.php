<?php

App::uses('AppController', 'Controller');

/**
 * Indicesplanificacions Controller
 *
 * @property Indicesplanificacion $Indicesplanificacion
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 */
class IndicesplanificacionsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Flash');

    public function beforeFilter() {
        parent::beforeFilter();
        /* El loadModel () la función es muy útil cuando es necesario utilizar un modelo que no es el modelo por defecto del 
          controlador o su modelo asociado */
        $this->loadModel('AuditoriasNormageneral');
        $this->loadModel('Auditoria');
        $this->loadModel('Normageneral');
        $this->loadModel('Planauditoria');
        $this->loadModel('Usuario');
        $this->loadModel('AuditoriasNormagenerals');
        $this->loadModel('Subnormaindice');
        $this->loadModel('Subnorma');
    }

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Indicesplanificacion->recursive = 0;
        $this->set('indicesplanificacions', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Indicesplanificacion->exists($id)) {
            throw new NotFoundException(__('Invalid indicesplanificacion'));
        }
        $options = array('conditions' => array('Indicesplanificacion.' . $this->Indicesplanificacion->primaryKey => $id));
        $this->set('indicesplanificacion', $this->Indicesplanificacion->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */public function normas($id_planauditoria, $id_auditoria) {
       $planauditorias = $this->Indicesplanificacion->Planauditoria->find('all', array('conditions' => array('Planauditoria.id' => $id_planauditoria)));
        foreach ($planauditorias as $value) {
            $auditoria_id = $value['Planauditoria']['auditoria_id'];
        }


        //se buscan las normas elegidas..
        $normasElegidas = $this->AuditoriasNormagenerals->find('all', array('conditions' => array('AuditoriasNormagenerals.auditoria_id' => $auditoria_id)));
        //debug($normasElegidas);
        foreach ($normasElegidas as $value) {
            $id_norma[] = $value['AuditoriasNormagenerals']['normageneral_id'];
        }
        //se busca la descricion de la norma
        $normagenerals = $this->Normageneral->find('all', array('conditions' => array('Normageneral.id' => $id_norma)));
        foreach ($normagenerals as $value01) {
            $id_subNorma = $value01['Subnorma'];
        }
        foreach ($id_subNorma as $value3) {

            $nor[] = $value3['id'];
        }
        //debug($value01);
        @$subnormasindices = $this->Subnormaindice->find('all', array('conditions' => array('Subnormaindice.subnorma_id' => $nor)));
        $this->set(compact('empresas', 'normagenerals', 'id_auditoria', 'subnormasindices'));
        $this->set(compact('sudnormaindices', 'planauditorias', 'id_planauditoria', 'id_auditoria'));
    }

    public function add($subnorma_id, $id_planauditoria, $id_auditoria) {
    $this->layout='vacio';
        $planauditorias = $this->Indicesplanificacion->Planauditoria->find('all', array('conditions' => array('Planauditoria.id' => $id_planauditoria)));
        foreach ($planauditorias as $value) {
            $auditoria_id = $value['Planauditoria']['auditoria_id'];
        }
        if (!empty($this->request->data['Indicesplanificacion'])) {
            foreach ($this->request->data['Indicesplanificacion'] as $value1) {
                  
                    $this->Indicesplanificacion->create();
                    $dato['Indicesplanificacion'] = $value1;
                    @$dato['Indicesplanificacion']['planauditoria_id'] = $id_planauditoria;
                    $this->Indicesplanificacion->save($dato);
                
            }
        $this->Flash->success(__('Indices registrados con éxito'));
        return $this->redirect(array('action' => 'normas/' . $id_planauditoria . '/' . $auditoria_id));
        }

        $sudnormaindices = $this->Indicesplanificacion->Subnormaindice->find('all', array('conditions' => array('Subnormaindice.subnorma_id' => $subnorma_id)));
        $this->set(compact('sudnormaindices', 'planauditorias', 'id_planauditoria', 'id_auditoria'));
    }

    public function indices($id_planificacion) {
        $this->layout = "vacio";
        $subnormaindices = $this->Indicesplanificacion->find('all', array('conditions' => array('Indicesplanificacion.planauditoria_id' => $id_planificacion)));
        
        foreach ($subnormaindices as $value) {
            $subnormas_id[] = $value['Subnormaindice']['subnorma_id'];
        }
        
        //debug($subnormas_id);
        $subnormas = $this->Subnorma->find('all', array('conditions' => array('Subnorma.id' => $subnormas_id)));
        
        foreach ($subnormas as $value1) {
           $norma[] = $value1['Subnorma']['normageneral_id'];
        }
        $this->Normageneral->recursive=-1;
        $normas = $this->Normageneral->find('all', array('conditions' => array('Normageneral.id' => $norma)));
        $this->set(compact('normas','subnormas', 'subnormaindices'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Indicesplanificacion->exists($id)) {
            throw new NotFoundException(__('Invalid indicesplanificacion'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Indicesplanificacion->save($this->request->data)) {
                return $this->flash(__('The indicesplanificacion has been saved.'), array('action' => 'index'));
            }
        } else {
            $options = array('conditions' => array('Indicesplanificacion.' . $this->Indicesplanificacion->primaryKey => $id));
            $this->request->data = $this->Indicesplanificacion->find('first', $options);
        }
        $sudnormaindices = $this->Indicesplanificacion->Subnormaindice->find('list');
        $planauditorias = $this->Indicesplanificacion->Planauditorium->find('list');
        $this->set(compact('sudnormaindices', 'planauditorias'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Indicesplanificacion->id = $id;
        if (!$this->Indicesplanificacion->exists()) {
            throw new NotFoundException(__('Invalid indicesplanificacion'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Indicesplanificacion->delete()) {
            return $this->flash(__('The indicesplanificacion has been deleted.'), array('action' => 'index'));
        } else {
            return $this->flash(__('The indicesplanificacion could not be deleted. Please, try again.'), array('action' => 'index'));
        }
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Indicesplanificacion->recursive = 0;
        $this->set('indicesplanificacions', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        if (!$this->Indicesplanificacion->exists($id)) {
            throw new NotFoundException(__('Invalid indicesplanificacion'));
        }
        $options = array('conditions' => array('Indicesplanificacion.' . $this->Indicesplanificacion->primaryKey => $id));
        $this->set('indicesplanificacion', $this->Indicesplanificacion->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Indicesplanificacion->create();
            if ($this->Indicesplanificacion->save($this->request->data)) {
                return $this->flash(__('The indicesplanificacion has been saved.'), array('action' => 'index'));
            }
        }
        $sudnormaindices = $this->Indicesplanificacion->Sudnormaindice->find('list');
        $planauditorias = $this->Indicesplanificacion->Planauditorium->find('list');
        $this->set(compact('sudnormaindices', 'planauditorias'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        if (!$this->Indicesplanificacion->exists($id)) {
            throw new NotFoundException(__('Invalid indicesplanificacion'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Indicesplanificacion->save($this->request->data)) {
                return $this->flash(__('The indicesplanificacion has been saved.'), array('action' => 'index'));
            }
        } else {
            $options = array('conditions' => array('Indicesplanificacion.' . $this->Indicesplanificacion->primaryKey => $id));
            $this->request->data = $this->Indicesplanificacion->find('first', $options);
        }
        $sudnormaindices = $this->Indicesplanificacion->Sudnormaindice->find('list');
        $planauditorias = $this->Indicesplanificacion->Planauditorium->find('list');
        $this->set(compact('sudnormaindices', 'planauditorias'));
    }

    /**
     * admin_delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_delete($id = null) {
        $this->Indicesplanificacion->id = $id;
        if (!$this->Indicesplanificacion->exists()) {
            throw new NotFoundException(__('Invalid indicesplanificacion'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Indicesplanificacion->delete()) {
            return $this->flash(__('The indicesplanificacion has been deleted.'), array('action' => 'index'));
        } else {
            return $this->flash(__('The indicesplanificacion could not be deleted. Please, try again.'), array('action' => 'index'));
        }
    }

}
