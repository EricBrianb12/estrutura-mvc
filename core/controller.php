<?php 
class controller
{
	public function loadView($viewName,$viewData = array())
	{	
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array())
	{	
		require 'views/templete.php';

	}

	public function loadViewInTemplete($viewName, $viewData = array())
	{	
		extract($viewData);
		require'views/'.$viewName.'.php';
	}
}


