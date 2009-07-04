<?php

// rythm core file
require_once dirname(__FILE__) . '/../config/AppConfig.class.php';

$config = AppConfig::getAppConfig('rblog', 'dev');
rtDispatcher::dispatch($config);
