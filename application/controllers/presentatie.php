<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Presentatie extends Public_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('presentatie');
		$this->load->view('footer');
	}

}

/* End of file presentatie.php */
/* Location: ./application/controllers/presentatie.php */