<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Admin_Controller {

	function __construct()
	{
		parent::__construct();

		//$this->output->enable_profiler(TRUE);
	}

	function index()
	{
		if ($this->session->userdata('username') !== false) {
			redirect(site_url('beheer/home/welcome'));
		}

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ( $this->form_validation->run() !== false ) {

			$this->load->model('beheer_model');
			$verified = $this->beheer_model->verify_user($this->input->post('username'),$this->input->post('password'));

			if ($verified !== false) {
				$this->session->set_userdata(array('username' => $this->input->post('username')));
				redirect('beheer/home/welcome');
			}

		}

		$css_files = array();
		$css_files[] = base_url().'assets/grocery_crud/themes/bootstrap/css/bootstrap.min.css';
		$css_files[] = base_url().'assets/grocery_crud/themes/bootstrap/css/bootstrap-responsive.min.css';

		$js_files = array();
		$js_files[] = base_url().'assets/grocery_crud/js/jquery-1.8.1.min.js';
		$js_files[] = base_url().'assets/grocery_crud/themes/bootstrap/js/bootstrap.min.js';

		$output = $this->load->view('beheer/login', '', true);

		$this->load->view('beheer/crud',(object)array('output' => $output , 'js_files' => $js_files , 'css_files' => $css_files));
	}

	function welcome()
	{
		if ($this->session->userdata('username') === false) {
			redirect(site_url('beheer/home'));
		}

		$css_files = array();
		$css_files[] = base_url().'assets/grocery_crud/themes/bootstrap/css/bootstrap.min.css';
		$css_files[] = base_url().'assets/grocery_crud/themes/bootstrap/css/bootstrap-responsive.min.css';

		$output_html = '<div class="well well-large"><h2>Welkom!</h2></div>';

		$this->load->view('beheer/crud',(object)array('output' =>  $output_html, 'js_files' => array() , 'css_files' => $css_files));
	}

	function logout()
	{
		$this->session->unset_userdata('username');
		redirect(site_url('beheer/home'));
	}

}