<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/navegacion');
		$this->load->view('templates/header');
		$this->load->view('contacto');
		$this->load->view('templates/footer');
	}
}