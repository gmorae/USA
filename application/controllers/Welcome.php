<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Contrlador responsavel por mostrar a area do usuario
	 * @author Gabriel Moraes Martins 
	 * @link https://github.com/gmorae/USA
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$this->lang->load('auth');
		$this->load->view('common/header');
		$this->load->view('common/footer');
		$this->load->view('common/navbar_usuario');
	}
	public function index()
	{
		$this->load->view('usuario/card');
	}
	public function ccb()
	{
		$this->load->view('usuario/ccb/form');
	}
	public function pessoal()
	{
		$this->load->view('usuario/pessoal/form');
	}
	public function saude()
	{
		$this->load->view('usuario/saude/form');	
	}

}
