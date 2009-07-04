<?php
class DocumentController extends rtController 
{
	public function showAction(rtRequest $request)
	{
		rtResponse::getInstance()->setViewClass('rtMarkdownView');
		$this->setTemplateDir(MF_CORE_DIR . DS . '..' . DS . 'doc' . DS . 'book');
		
		$page = $request->getParameter('page');
//		if(!file_exists($this->getTemplateDir() . DS . $page)) throw new rtException404("Page: $page not found");
		
		$this->setTemplate($page);			
	}
}