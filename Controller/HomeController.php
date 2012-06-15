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
        $this->set('title_for_layout', 'Exemplo de select box dinamico com cidades e estados do Brasil');
        $this->set('estados', $this->Estado->find('list'));
        $this->set('conexao', $this->pg_connection_string_from_database_url());
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

    function pg_connection_string_from_database_url() {
        extract(parse_url($_ENV["DATABASE_URL"]));
        return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
    }

}
