<?php

class AppController extends Controller {

    var $components = array('Acl', 'Auth', 'Session');

    function beforeFilter() {

        $this->Auth->authorize = array(
            'Actions' => array('actionPath' => 'Controller/'),
            'display'
        );

//        $this->Auth->allowedActions = array('display');
//
//        $this->Auth->actionPath = 'Controller/';
        //Configure AuthComponent
        $this->Auth->authorize = 'actions';
        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'add');
    }

}

?>
