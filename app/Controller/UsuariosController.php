<?php

App::uses('AppController', 'Controller');

/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UsuariosController extends AppController {

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
      public function bienvenida() {
        
      }

    public function menu() {
       $user = $this->Session->read('Usuario');
      $nivel=$user['Usuario']['nivel_id'];
        $this->set(compact('user','nivel'));
       //debug($user);
    }

    public function index() {
        $user = $this->Session->read('Usuario');
       //debug($user);
        $id_usuario = $user['Usuario']['id'];
        if ($user['Usuario']['nivel_id'] == '1') {
           $this->Usuario->recursive = 0;
	  
            
        } 
         if ($user['Usuario']['nivel_id'] == '2') {
           $this->Usuario->recursive = 0;
           $empresa_id=$user['Usuario']['empresa_id'];
            $this->Paginator->settings = array(
                'conditions' => array('Usuario.empresa_id' => $empresa_id,'Usuario.nivel_id' =>array(2, 3, 4)),
                'limit' => 20,
                'order' => 'Usuario.id ',
            );
            
        } 
        
            $this->set('usuarios', $this->Paginator->paginate());
            $data = $this->Paginator->paginate('Usuario');
            $this->set(compact('user'));
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Usuario->exists($id)) {
            throw new NotFoundException(__('Invalid usuario'));
        }
        $options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
        $this->set('usuario', $this->Usuario->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function login() {
    
        // Aunque los campos username y password tienen validación para que no estén vacíos,
        // volvemos a asegurarnos con el condicional que el campo username del formulario tiene
        //algún valor
        if (!empty($this->data['Usuario']['username'])) {
            //Consulta SQL para buscar al usuario con sus credenciales en la BD
            $user = $this->Usuario->find('first', array('conditions' => array(
                    'Usuario.username' => $this->data['Usuario']['username'],
                    'Usuario.password' => $this->data['Usuario']['password'])));
            //Si se ha encontrado al usuario en la consulta
            if (!empty($user) and $user['Usuario']['estado']=='Activo' ) {
                //Si existe se redirecciona al usuario a la aplicación creando una variable de sesión 
                $this->Session->write('Usuario', $user);
                $this->Redirect(array('controller'=>'usuarios','action'=>'menu'));
                exit();
            } else {
                //Si los datos no son correctos se comunica al usuario y se le devuelve al mismo
                //formulario de login
                $this->Session->setFlash(__('Nombre de usuario y/o password incorrectos o el usuario esta inactivo'));
                $this->Redirect(array('action' => 'login'));
                exit();
            }
        }
    }

    public function salir() {
        $this->Session->destroy();
        return $this->redirect(array('action' => 'login'));
    }

    public function add() {
    $this->layout='vacio';
    $user = $this->Session->read('Usuario');
        //debug($user);
        $nivel = $user['Usuario']['nivel_id'];
        if ($this->request->is('post')) {
            $this->Usuario->create();
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash(__('El usuario ha sido creado.'));
                return $this->redirect(array('action' => 'index'));
            } else {
               $this->Session->setFlash(__('El usuario no pudo se creado, trate de nuevo.'));
            }
            
        }
        
       
       $empresas = $this->Usuario->Empresa->find('list');
       
       
       
        //debug($empresas);
         $this->set(compact('empresas','user'));
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
        //debug($user);
        $nivel = $user['Usuario']['nivel_id'];
        if (!$this->Usuario->exists($id)) {
            throw new NotFoundException(__('Invalid usuario'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash(__('El usuario ha sido Actualizado.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('El usuario  no ha sido Actualizado'));
            }
        } else {
            $options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
            $this->request->data = $this->Usuario->find('first', $options);
        }
      
        $empresas = $this->Usuario->Empresa->find('list');
       
        $this->set(compact('empresas','user'));
    }

 public function activar($id = null) {
    $this->layout='vacio';
     $user = $this->Session->read('Usuario');
        //debug($user);
        $nivel = $user['Usuario']['nivel_id'];
        if (!$this->Usuario->exists($id)) {
            throw new NotFoundException(__('Invalid usuario'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash(__('El  estado del usuario ha sido Actualizado'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('El  estado del usuario  no ha sido Actualizado'));
            }
        } else {
            $options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
            $this->request->data = $this->Usuario->find('first', $options);
        }
      
        $empresas = $this->Usuario->Empresa->find('list');
       
        $this->set(compact('empresas'));
    }
    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Usuario->id = $id;
        if (!$this->Usuario->exists()) {
            throw new NotFoundException(__('Invalid usuario'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Usuario->delete()) {
            $this->Session->setFlash(__('El usuario ha sido eliminado.'));
        } else {
            $this->Session->setFlash(__('El usuario no pudo ser eliminado.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
