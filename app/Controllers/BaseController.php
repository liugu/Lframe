<?php 

class BaseController
{	
	protected $view;
	public function __construct()
	{
		# code...
	}

	public function __destruct()
	{
		$view = $this->view;
		if($view instanceof View){
			extract($view->data);
			require $view->view;
		}
	}
}