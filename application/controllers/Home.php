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

	public function selectedEn()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "homeEn_v";
		$this->load->view($viewData->viewFolder, $viewData);
	}

	public function about_usEn()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "aboutEn_v";
		$this->load->view($viewData->viewFolder,$viewData);
	}

	public function contact_usEn()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "contactEn_v";
		$this->load->view($viewData->viewFolder, $viewData);
	}

	public function referencesEn()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "referencesEn_v";
		$this->load->view($viewData->viewFolder, $viewData);
	}

	public function selectedArp()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "homeArp_v";
		$this->load->view($viewData->viewFolder, $viewData);
	}

	public function about_usArp()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "aboutArp_v";
		$this->load->view($viewData->viewFolder,$viewData);
	}

	public function contact_usArp()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "contactArp_v";
		$this->load->view($viewData->viewFolder, $viewData);
	}

	public function referencesArp()
	{
		$viewData = new stdClass();
		$viewData->viewFolder = "referencesArp_v";
		$this->load->view($viewData->viewFolder, $viewData);
	}
}
