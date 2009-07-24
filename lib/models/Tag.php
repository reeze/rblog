<?php

class Tag extends Meta
{
  public function preSave($event)
  {
    $this->_set('type', Meta::TAG);
  }
}
