<?php
class BlogComponent extends rtComponent
{
	public function executeCatagory()
	{
		$this->catagories = Catagory::getAll();
	}
}