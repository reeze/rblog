<?php

# This should require rythm framework's autoload class to start the framework
# rythm autoload
require_once dirname(__FILE__) . '/../../rythm/lib/rtAutoloader.class.php';
rtAutoloader::register();

rtConfig::set('rt_project_dir', realpath(dirname(__FILE__) . DS . '..')); 


class AppConfig extends rtAppConfig
{
  public function setup()
  {
  	// Set your config here
  	// rtConfig::set('your-key', $your_value);
  }
}