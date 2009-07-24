<?php
/**
 * User controller
 *
 */
class UserController extends rtController
{
	public function loginAction(rtRequest $request)
	{
		$catagory = new Catagory();
		$catagory->name = "test";
		
		$post = new Post();
		$post->title = "Test page title";
		$post->text  = "Content body";
		
		$post->Metas[] = $catagory;
		$post->save();
		$post->ContentMeta->delete();
		
		$this->redirect('/');
	}
	public function addUserAction()
	{
		$user = new User();
		$user->username = "reeze";
		$user->password = 'xia';
		$user->email = 'reeze.xia@gmail.com';
		
		$user->save();
		
		$this->setFlash('notice', 'Add user: reeze');
		$this->redirect('@homepage');
	}
}