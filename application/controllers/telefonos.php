<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Telefonos extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/navegacion');
		$this->load->view('templates/header');
		$this->load->view('telefonos');
		$this->load->view('templates/footer');
	}
}