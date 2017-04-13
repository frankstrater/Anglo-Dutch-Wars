<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wars_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_war($war_id)
	{
		$this->db->select('*');
		$this->db->from('adw_wars');
		$this->db->where('id', $war_id);

		$query = $this->db->get();

		return $query->row_array();
	}

	public function get_commanders()
	{
		$this->db->select('*');
		$this->db->from('adw_commanders');
		$this->db->where('avatar !=', 'unknown.jpg');
		$this->db->order_by('id','random');
		$this->db->limit(2);

		$query = $this->db->get();

		return $query->result_array();
	}

}

/* End of file wars_model.php */
/* Location: ./application/models/wars_model.php */