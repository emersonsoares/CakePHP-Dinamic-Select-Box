<?php

class DATABASE_CONFIG  {

    var $default = null;
    
    public $development = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'root',
        'password' => '1234',
        'database' => 'cake_labs',
        'prefix' => 'sb_'
    );
    public $production = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'cakelabs.db.7856587.hostedresource.com',
        'login' => 'cakelabs',
        'password' => 'cakASDF159',
        'database' => 'cakelabs',
        'prefix' => 'sb_'
    );

    function __construct() {
        if(Configure::read('Environment.name') == 'production')
            $this->default = $this->production;
        else if(Configure::read('Environment.name') == 'development')
            $this->default = $this->development;
    }

}
