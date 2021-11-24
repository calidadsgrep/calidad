<?php

App::uses('AppController', 'Controller');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SquemasController extends AppController {

    public $components = array('Paginator', 'Session', 'Security');
   
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Security->unlockedActions = array('add', 'updatesquema');
    }

    
    public function add() { 
        $this->checkPermission(array("AdministradorFullControl")); // Permite a los usuarios nombrados realizar este método
        if ($this->request->is('post')) {
            $this->Squema->create();
            $this->request->data['Squema']['nombre_bd'] = $this->request->data['Squema']['estandar'].''.$this->request->data['Squema']['nombre'];
            if ($this->Squema->save($this->request->data)) {
                $this->Session->setFlash(__('El Squema de la base de datos ha sido registrado con éxito'));
                return $this->redirect(array('controller' => 'Empresas', 'action' => 'index'));
            } else {
                $this->Session->setFlash(__('La sesión ha sido registrada.Favor, inténtalo nuevamente.'));
            }
        }
        $this->Paginator->settings = array(
            'limit' => 20,
            'recursive' => -1
        );         
        $this->set('squemas', $this->Paginator->paginate());
        $this->set(compact('count_squemas'));
    }
    
    public function updatesquema() { 
        $this->checkPermission(array("AdministradorFullControl", "Administrador")); // Permite a los usuarios nombrados realizar este método
        if (isset($this->params->params['squema_id'])) {
            $this->Squema->id = $this->params->params['squema_id'];
            $this->Squema->saveField('empresa_id', $this->params->params['empresa_id']);
        }
    }
}
