<?php

Class Users extends Controller
{
	protected function index()
	{
		$viewModel = new HomeModel();
		$this->ReturnView($viewModel->index(),true);
	}

	public function aboutUs()
	{
		echo "This is the about us page";
	}
}