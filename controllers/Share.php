<?php 
/**
* 
*/
class Share extends Controller
{
	
	public function index()
	{
		$viewModel = new ShareModel();
		$this->ReturnView($viewModel->index(),true);
	}

	public function add()
	{
		$this->returnView('add',true);
	}
}
 ?>