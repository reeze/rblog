<?php

# rythm autoload
require_once dirname(__FILE__) . '/../../rythm/lib/rtAutoloader.class.php';
rtAutoloader::register();

rtConfig::set('rt_project_dir', realpath(dirname(__FILE__) . DS . '..')); 


class AppConfig extends rtAppConfig
{
  public function setup()
  {
  	
  }
}