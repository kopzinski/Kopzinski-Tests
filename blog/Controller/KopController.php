<?php

App::uses('AppController', 'Controller');

class KopController extends AppController {

    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('*');
//        $this->Auth->allow('index', 'view');
    }

    function groups() {

        $this->loadModel('User');

        $users = $this->User->find('all', array('limit' => 2, 'order' => 'User.created DESC'));

        $this->set('users', $users);

    }

}

?>
