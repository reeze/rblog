<?php

class PostController extends rtController 
{
	public function indexAction()
	{
		$this->setTitle('Blog Index');
		
		$this->posts = Doctrine_Query::create()
    					->from('Post p')->orderBy('p.created_at DESC')->fetchArray();

    // respond formats
		$this->respond(
			array(
				'rss' => array('layout' => false)
			));
	}
	
	public function archiveAction()
	{
		$this->posts = Doctrine_Query::create()
    					->from('Post p')->fetchArray();
	}
	
	public function showAction(rtRequest $request)
	{
		$table = Doctrine::getTable('Content');
		$this->post = $table->findOneBySlug($request->getParameter('slug'));
	}
}
