<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('inc_inicio.php');
		$this->load->view('welcome_message');
		$this->load->view('inc_fin.php');

	}
	//vamos a enerar otra vista

	public function vista2()
	{
		$this->load->view('inc_inicio.php');
		$this->load->view('formulario');
		$this->load->view('inc_fin.php');
	}

	public function pruevitadb()
	{
		$query0=$this->db->get('estudiante'); //con este get consigue los datos de la base de datos
		$execonsulta=$query0->result(); // en una variable guardaremso lo obtenido
		print_r($execonsulta); // imprimimos lo obtenido

	}
}
