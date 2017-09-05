<?php

Class Users extends Controller
{


	protected function register()
	{
		$viewModel = new HomeModel();
		$this->ReturnView($viewModel->index(),true);
	}
}