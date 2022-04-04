<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public $viewFolder = "";

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

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

	public function contact_us()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "contact_v";
		$this->load->view($viewData->viewFolder, $viewData);
	}

	public function references()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "references_v";
		$this->load->view($viewData->viewFolder, $viewData);
	}
}
