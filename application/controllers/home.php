<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Public_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('wars_model');
	}

	public function index()
	{
		$data['commanders'] = $this->wars_model->get_commanders();

		$this->load->view('header');
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */