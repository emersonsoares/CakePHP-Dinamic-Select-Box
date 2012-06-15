<?php

App::uses('AppController', 'Controller');

class HomeController extends AppController {
    
    function index() {
        $this->set('estados', array());
    }
}
