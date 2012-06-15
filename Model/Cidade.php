<?php
App::uses('AppModel', 'Model');
/**
 * Cidade Model
 *
 * @property Estado $Estado
 */
class Cidade extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nome';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
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
