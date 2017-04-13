<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Battlecommanders extends Admin_Controller {

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
		$crud->set_table('adw_battle_commanders');
		$crud->set_subject('Battle commander');

		$crud->set_relation('battle_id','adw_battles','name');
		$crud->set_relation('commander_id','adw_commanders','name');
		$crud->set_relation('command_id','adw_command','command');

		$crud->display_as('battle_id','Battle');
		$crud->display_as('commander_id','Commander');
		$crud->display_as('command_id','Command');

		//$crud->columns('name','year','war');

		//$crud->unset_delete();
		//$crud->unset_add();

		//$crud->unset_texteditor('tekst','tekst_engels','beschrijving','beschrijving_engels');

		$output = $crud->render();

		$this->load->view('beheer/crud',$output);
	}

}