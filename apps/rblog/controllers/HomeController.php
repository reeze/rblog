<?php
class HomeController extends rtController {
	protected function preExecute(rtRequest $request)
	{
		if($request->getParameter('title')) $this->setTitle($request->getParameter('title'));
	}
	
	
	public function indexAction(rtRequest $request)
	{
		$this->title = "What a test";
		
		if($request->getMethod() == rtRequest::GET)
		{
			$this->method = 'sure GET';
		}
	}
	
	public function testAction(rtRequest $request)
	{
		$this->setFlash('notice', 'Its a notice Flash message');
		$this->redirect('/blog');
//		$this->name = $request->getParameter('test');
	}
	
	public function listAction()
	{
		$this->news = array('news1', 'news2');
	}
}
