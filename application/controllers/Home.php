<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public $viewFolder = "";

	public function index()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "home_v";
		$this->load->view($viewData->viewFolder,$viewData);
	}

	public function about_us()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "about_v";
		$this->load->view($viewData->viewFolder,$viewData);
	}



}
