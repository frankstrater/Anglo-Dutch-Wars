<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class War extends Public_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('wars_model');
		$this->load->model('battles_model');
		$this->load->model('ocd_model');

		//$this->output->enable_profiler(TRUE);

	}

	public function index()
	{
		redirect(site_url('home'));
	}

	public function view($id)
	{
		$data['war'] = $this->wars_model->get_war($id);

		if (empty($data['war'])) {
			show_404();
		}

		$this->war_active = $data['war']['name'];

		$battle_first = $this->battles_model->get_battle_first($data['war']['name']);

		if (empty($battle_first)) {
			$data['war']['battle_first_id'] = 0;
		} else {
			$data['war']['battle_first_id'] = $battle_first['id'];
		}

		$this->load->view('header');
		$this->load->view('war', $data);
		$this->load->view('footer');
	}

}

/* End of file war.php */
/* Location: ./application/controllers/war.php */