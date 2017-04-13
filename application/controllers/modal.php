<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modal extends Public_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ocd_model');

		$this->output->cache(30);
	}

	public function index()
	{

	}

	public function ocdobject($id)
	{
		$array_id = explode('~', $id);
		$ocd_source = $array_id[0];
		$ocd_id = $array_id[1];

		$data['ocd_object'] = $this->ocd_model->get_ocd_object($ocd_source, $ocd_id);

		$this->load->view('modal', $data);
	}

	public function ocdxobject($id)
	{
		$data['ocd_object'] = $this->ocd_model->get_ocd_xobject($id);

		$this->load->view('modal', $data);
	}

}

/* End of file modal.php */
/* Location: ./application/controllers/modal.php */