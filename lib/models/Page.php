<?php

class Page extends Content
{
	public function preSave($event)
	{
		$this->_set('type', self::PAGE);
		
		parent::preSave($event);
	}
}