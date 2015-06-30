<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Entrevistas extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/navegacion');
		$this->load->view('templates/header');
		$this->load->view('entrevistas');
		$this->load->view('templates/footer');
	}
}