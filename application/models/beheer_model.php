<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beheer_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function verify_user($username, $password)
	{
		$user = $this->get_user($username);

		if ($user === FALSE) {
			return FALSE;
		} else {
			$this->load->library('Bcrypt');
			return $this->bcrypt->verify($password, $user['password']);
		}
	}

	public function get_user($username)
	{
		$query = $this->db->get_where('adw_users', array('username' => $username));

		if ($query->num_rows()) {
			return $query->row_array();
		} else {
			return FALSE;
		}
	}

}

/* End of file beheer_model.php */
/* Location: ./application/models/beheer_model.php */