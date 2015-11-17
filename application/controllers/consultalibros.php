<?php if ( ! defined('BASEPATH')) exit('no script access allowed');

class ConsultaLibros extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('ion_auth');
		$this->load->library('grocery_CRUD');
	}	

	public function index(){

		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
		
	}

	function consulta()
	{
		try{
			$crud = new grocery_CRUD();
			$crud->set_theme('datatables');
			$crud->set_table('libro');
			$crud->set_subject('Libros');
			$crud->set_language('spanish');	
			$crud->columns('titulo_libro','fecha_publicacion','ruta_libro');
			$crud->display_as('titulo_libro','Titulo');
			$crud->display_as('fecha_publicacion','Fecha de publicación');
			$crud->display_as('ruta_libro','Documento');
			$crud->required_fields('titulo_libro', 'fecha_publicacion', 'ruta_libro');
			$crud->set_field_upload('ruta_libro', 'assets/uploads/files');	

			$output = $crud->render();

			$this->_librosoutput($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	function _librosoutput($output = null)
	{
		$this->load->view('templates/naveadmin');
		$this->load->view('consultalibros', $output);
		$this->load->view('templates/footer');
	}
}