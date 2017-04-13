<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Battles_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_battle($battle_id)
	{
		$this->db->select('*');
		$this->db->from('adw_battles');
		$this->db->where('id', $battle_id);

		$query = $this->db->get();

		return $query->row_array();
	}

	public function get_battle_first($war = '')
	{
		$this->db->select('id');
		$this->db->from('adw_battles');
		$this->db->where('war', $war);
		$this->db->order_by('id', 'asc');
		$this->db->limit(1);

		$query = $this->db->get();

		return $query->row_array();
	}

	public function get_battle_prev($battle_id, $war = '')
	{
		$array_where = array('id <' => $battle_id, 'war' => $war);

		$this->db->select('id');
		$this->db->from('adw_battles');
		$this->db->where($array_where);
		$this->db->order_by('id', 'desc');
		$this->db->limit(1);

		$query = $this->db->get();

		return $query->row_array();
	}

	public function get_battle_next($battle_id, $war = '')
	{
		$array_where = array('id >' => $battle_id, 'war' => $war);

		$this->db->select('id');
		$this->db->from('adw_battles');
		$this->db->where($array_where);
		$this->db->order_by('id', 'asc');
		$this->db->limit(1);

		$query = $this->db->get();

		return $query->row_array();
	}

	public function get_battles_before($battle_id, $war = '')
	{
		$array_where = array('id <=' => $battle_id, 'war' => $war);

		$this->db->select('id, name, year, lng, lat');
		$this->db->from('adw_battles');
		$this->db->where($array_where);

		$query = $this->db->get();

		return $query->result_array();
	}

	public function get_battle_commanders($battle_id)
	{
		$this->db->select('*');
		$this->db->from('adw_battle_commanders');
		$this->db->join('adw_commanders','adw_battle_commanders.commander_id = adw_commanders.id');
		$this->db->join('adw_command','adw_battle_commanders.command_id = adw_command.id');
		$this->db->where('battle_id', $battle_id);

		$query = $this->db->get();

		return $query->result_array();
	}

	

}

/* End of file battles_model.php */
/* Location: ./application/models/battles_model.php */