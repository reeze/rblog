<?php

/**
 * Content
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 5441 2009-01-30 22:58:43Z jwage $
 */
class Content extends BaseContent
{
	const PAGE = 'page';
	const POST = 'post';
	
	public function postSave($event)
	{
    // Update the meta's count	
	}
	
  public function postDelete($event)
  {
  	
  }
}