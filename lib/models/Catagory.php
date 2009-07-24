<?php

class Catagory extends Meta
{
  public function preSave($event)
  {
    $this->_set('type', Meta::CATAGORY);
  }

  public function getAll()
  {
    return Doctrine_Query::create()
            ->from('Catagory c')
            ->fetchArray();
  }
}
