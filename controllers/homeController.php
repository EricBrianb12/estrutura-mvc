<?php 
class homeController extends controller
{
	public function index()
	{
		$dados = array(
			'quantidade' => '5', 
			'nome'=> 'Eric', 
			'idade' =>'22'
		);

		$this->loadTemplate('home',$dados);
	}

	
}

