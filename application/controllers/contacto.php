<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('ion_auth');
		$this->load->library('grocery_CRUD');	
	}

	public function index()
	{
		$this->load->view('templates/navegacion');
		if ($this->ion_auth->logged_in())
		{
			$this->load->view('templates/naveadmin');
		}
		$this->load->view('templates/header');
		$this->load->view('contacto');
		$this->load->view('templates/footer');
	}
}