<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Xobjects extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		if ($this->session->userdata('username') === false) {
			redirect(site_url('beheer/home'));
		}

		$crud = new grocery_CRUD();
		$crud->set_theme('bootstrap');
		$crud->set_table('adw_xobjects');
		$crud->set_subject('X-objects');

		//$crud->columns('name','year','war');

		//$crud->unset_delete();
		//$crud->unset_add();

		//$crud->unset_texteditor('tekst','tekst_engels','beschrijving','beschrijving_engels');

		$output = $crud->render();

		$this->load->view('beheer/crud',$output);
	}

}