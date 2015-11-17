<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Correos extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/navegacion');
		{
			$this->load->view('templates/naveadmin');
		}
		$this->load->view('correos');
		$this->load->view('templates/footer');
	}
}