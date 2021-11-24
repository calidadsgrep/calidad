<?php

App::uses('Controller','Controller');

class AppController extends Controller {

public $components=array('Session');

    // Comprobar si el usuario está logueado
    function authenticate()
    {
        // Comprobamos si la variable de sesión existe. Si es así quiere decir que el usuario se ha logueado
       //correctamente y se le redirecciona a la aplicación.
      //Si no existe se le devuelve al login.
        if(!$this->Session->check('Usuario'))
        {
            $this->redirect(array('controller'=>'usuarios','action'=>'login'));
            exit();
        }

    }
 
    //Autenticación obligatoria si se quiere entrar a cualquier parte de la aplicación
    function afterFilter()
    {
        if($this->action!='login')
        {
            $this->authenticate();
        }
    }
}