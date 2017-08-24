<?php 

class bootstrap
{
	private $controller;
	private $action;
	private $request;

	public function __construct($request){
		$this->request = $request;
		if ($this->request['controller']=="") {
			$this->controller = 'home';
		}
		else
		{
			$this->controller = $this->request['controller'];
		}

		if ($this->request['action']=="") {
			$this->action = 'index';
		}
		else
		{
			$this->action = $this->request['action'];
		}

	}


	public function createController()
	{
		if (class_exists($this->controller)) {
			$parent = class_parents($this->controller);
			//check to see if the class is extended
			if (in_array("Controller", $parents)) {
				if (method_exists($this->controller,$this->action)) {
					return new $this->controller($this->action, $this->request);
				}
				else
				{
					// Inform the user that the method doesn not exist
					echo "<h1> Method does not exist </h1>";
					return;
				}
			
			}
			else
			{
				echo "<h1> Base Controller not found";
				return;
			}
		}
		else
		{
			echo "<h1> The Controller class doesn not exist";
				return;
		}

	}

}