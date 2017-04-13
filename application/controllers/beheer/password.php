<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Password extends Admin_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		// Set the password
		$password = 'anglodutch';

		// Get the hash, letting the salt be automatically generated
		$this->load->library('Bcrypt');
		$hash = $this->bcrypt->hash($password);

		echo $hash;
	}

}