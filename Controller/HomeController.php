<?php

App::uses('AppController', 'Controller');

class HomeController extends AppController {

    public $components = array('RequestHandler');
    public $helpers = array('Js');

    function beforeFilter() {
        $this->loadModel('Estado');
        $this->loadModel('Cidade');
    }

    function index() {
        $this->set('estados', $this->Estado->find('list'));
    }

    public function listar_cidades_json() {
        $this->layout = false;
        if ($this->RequestHandler->isAjax()) {
            $this->set('cidades', $this->Cidade->find('list', array('conditions' =>
                        array('Cidade.estado_id' => $this->params['url']['estadoId']),
                        'recursive' => -1)
                    ));
        }
    }

}
