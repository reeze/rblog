<?php

class Post extends Content
{
	public function preSave($event)
	{
		$this->_set('type', self::POST);
		
		parent::preSave($event);
	}
}