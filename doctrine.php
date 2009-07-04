<?php
 
require_once 'config/AppConfig.class.php';
 
AppConfig::getAppConfig('rblog', 'dev');
Rythm::init();
// Include your Doctrine configuration/setup here, your connections, models, etc.
 
// Configure Doctrine Cli
// Normally these are arguments to the cli tasks but if they are set here the arguments will be auto-filled and are not required for you to enter them.
 
$config = array('data_fixtures_path' => '/path/to/data/fixtures',
                'models_path' => rtConfig::get('rt_project_dir') . DS . 'lib' . DS . 'models',
                'migrations_path' => ROOT_DIR . DS . 'data' . DS . 'migrations',
                'sql_path' => rtConfig::get('rt_data_dir') . DS . 'sql',
                'yaml_schema_path' => rtConfig::get('rt_config_dir'). DS . 'schema.yml');
 
$cli = new Doctrine_Cli($config);
$cli->run($_SERVER['argv']);
 