<?php if(! defined('BASEPATH')) exit('no script access allowed');

class EditaRevista extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('ion_auth');
		$this->load->library('grocery_CRUD');
	}	

	public function index(){

		if(!$this->ion_auth->logged_in()){
			redirect('auth/login', 'refresh');
		}
		$this->load->view('templates/naveadmin');
		$this->load->view('editarevista');
		$this->load->view('templates/footer');
	}
}