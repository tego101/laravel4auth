<?php
#	List Controller 

Class ListController extends BaseController {
	#	Global template.
	protected $layout = 'layouts.global';

	public function showList()
	{
		$this->layout->content = View::make('list.viewList');
	}
}