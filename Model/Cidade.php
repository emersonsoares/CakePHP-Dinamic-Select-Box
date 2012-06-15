<?php

App::uses('AppModel', 'Model');

class Cidade extends AppModel {

    public $displayField = 'nome';
    
    public $belongsTo = array(
        'Estado' => array(
            'className' => 'Estado',
            'foreignKey' => 'estado_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
