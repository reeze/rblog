<?php

// rythm core file
require_once dirname(__FILE__) . '/../config/AppConfig.class.php';

$domain = explode('.', $_SERVER['HTTP_HOST']);
$reversed_domain = array_reverse($domain);

$allow_apps = array('backend', 'rblog');

if(isset($reversed_domain[2]))
{
	$app = $reversed_domain[2]; // subdomain
}

if(!in_array($app, $allow_apps))
{
	$app = 'rblog';
}

$config = AppConfig::getAppConfig($app, 'dev');
rtDispatcher::dispatch($config);
