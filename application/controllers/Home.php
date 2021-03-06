<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public $viewFolder = "";

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');

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

	public function sendMail()
	{
		$this->load->library('email');

		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$phone = $this->input->post("phone");
		$subject = $this->input->post("subject");
		$message = $this->input->post("message");

		$this->email->from("info@maximodel.com.tr", "Maximodel Design");
		$this->email->to("info@maximodel.com.tr");
		$this->email->subject($subject);
		$this->email->message("
			<strong>$name</strong> Kullan??c??s??ndan A??a????daki Mesaj Gelmi??tir <br>
			<strong>Email Adresi: </strong> $email <br>
			<strong>Telefon Numaras?? : </strong> $phone <br>
			<strong>Mesaj??: </strong> $message <br>
 							");


		$send = $this->email->send();

		if ($send) {
			$returnArray['title'] = "????lem Ba??ar??l??";
			$returnArray['text'] = "Mail Ba??ar?? ??le At??ld??";
			$returnArray['type'] = "success";
			$this->session->set_flashdata("return", $returnArray);
			redirect(base_url('/iletisim'));
		}
		else {
			$returnArray['title'] = "????lem Ba??ar??s??z";
			$returnArray['text'] = "Mail Atarken Hata Olu??tu. L??tfen Mail ??ifrenizi Kontrol ediniz";
			$returnArray['type'] = "danger";

			$this->session->set_flashdata("return", $returnArray);
			redirect(base_url('/iletisim'));
		}
	}

	public function sendMailEn()
	{
		$this->load->library('email');

		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$phone = $this->input->post("phone");
		$subject = $this->input->post("subject");
		$message = $this->input->post("message");

		$this->email->from("info@maximodel.com.tr", "Maximodel Design");
		$this->email->to("info@maximodel.com.tr");
		$this->email->subject($subject);
		$this->email->message("
			<strong>$name</strong> Kullan??c??s??ndan A??a????daki Mesaj Gelmi??tir <br>
			<strong>Email Adresi: </strong> $email <br>
			<strong>Telefon Numaras?? : </strong> $phone <br>
			<strong>Mesaj??: </strong> $message <br>
 							");


		$send = $this->email->send();

		if ($send) {
			$returnArray['title'] = "Success";
			$returnArray['text'] = "Mail Successfully Discarded";
			$returnArray['type'] = "success";
			$this->session->set_flashdata("return", $returnArray);
			redirect(base_url('/contact'));
		}
		else {
			$returnArray['title'] = "Operation Failed";
			$returnArray['text'] = "An Error Occurred While Sending Mail. Please Check Your Email Password";
			$returnArray['type'] = "danger";

			$this->session->set_flashdata("return", $returnArray);
			redirect(base_url('/contact'));
		}
	}

	public function sendMailArp()
	{
		$this->load->library('email');

		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$phone = $this->input->post("phone");
		$subject = $this->input->post("subject");
		$message = $this->input->post("message");

		$this->email->from("info@maximodel.com.tr", "Maximodel Design");
		$this->email->to("info@maximodel.com.tr");
		$this->email->subject($subject);
		$this->email->message("
			<strong>$name</strong> Kullan??c??s??ndan A??a????daki Mesaj Gelmi??tir <br>
			<strong>Email Adresi: </strong> $email <br>
			<strong>Telefon Numaras?? : </strong> $phone <br>
			<strong>Mesaj??: </strong> $message <br>
 							");


		$send = $this->email->send();

		if ($send) {
			$returnArray['title'] = "?????????? ??????????";
			$returnArray['text'] = "???? ?????????? ???????????? ??????????";
			$returnArray['type'] = "success";
			$this->session->set_flashdata("return", $returnArray);
			redirect(base_url('/contact-arabian'));
		}
		else {
			$returnArray['title'] = "???????? ??????????????";
			$returnArray['text'] = "?????? ?????? ?????????? ?????????? ????????????. ???????? ???????????? ???? ???????? ???????? ???????????? ???????????????????? ???????????? ????";
			$returnArray['type'] = "danger";

			$this->session->set_flashdata("return", $returnArray);
			redirect(base_url('/contact-arabian'));
		}
	}
}
