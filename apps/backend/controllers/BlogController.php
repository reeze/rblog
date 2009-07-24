<?php

class BlogController extends rtController 
{
	public function indexAction()
	{
		$this->setTitle('Administration');
		
		$this->posts = Doctrine_Query::create()
    					->from('Post p')->orderBy('p.created_at DESC')->fetchArray();

    // respond formats
		$this->respond(
			array(
				'rss' => array('layout' => false)
			));
	}

	
	public function newAction(rtRequest $request)
	{
    $this->catagories = Catagory::getAll();

		if($request->getMethod() == rtRequest::POST)
		{
			$post = new Post();
			$post->title = $request->getParameter('title');
			$post->content = $request->getParameter('content');
            $post->catagory_id = $request->getParameter('catagory_id');

			if($post->isValid())
			{
				$post->save();
				$this->setFlash('notice', '成功发布博文:)');
				$this->redirect('blog/index');
			}
		}
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
