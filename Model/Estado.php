<?php

App::uses('AppModel', 'Model');

class Estado extends AppModel {

    public $displayField = 'uf';

    public $hasMany = array(
        'Cidade' => array(
            'className' => 'Cidade',
            'foreignKey' => 'estado_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

}
