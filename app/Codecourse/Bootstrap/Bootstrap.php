<?php 

namespace Codecourse\Bootstrap;


class Bootstrap
{
	
	public function app()
	{
		$ca= null;
		foreach ($_GET as $key => $value) 
		{
			$ca = $value;
		}
		$ca = ltrim($ca,'/');
		$ca = rtrim($ca,'/');

		$ca = explode('/', $ca);
		$actionName = DEFAULT_ACTION;
		if ($ca[0] != '') 
		{
			$controllerName = DEFAULT_CONTROLLER_NAMESPACE . $ca[0] .'controller';
			if (isset($ca[1])) {
			$actionName = $ca[1];
		  }
		} 
		else
		{
			 $controllerName = DEFAULT_CONTROLLER_NAMESPACE . DEFAULT_CONTROLLER;
		}
		if ( ! class_exists($controllerName)) 
		{
			$controllerName = DEFAULT_CONTROLLER_NAMESPACE . DEFAULT_CONTROLLER;
		}
		$controller = new $controllerName();
		$controller->{$actionName}();
	}
}

 ?>