<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Public_Controller extends MY_Controller {

	public $total_score = 0;
	public $war_active = '';

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('initialize_score') == FALSE) {

			$scores = array();
			
			$this->db->select('id');
			$this->db->from('adw_battles');

			$query = $this->db->get();

			foreach ($query->result_array() as $row) {
				$key = 'score_'.$row['id'];
				$scores[$key] = 0;
			}

			$this->session->set_userdata('initialize_score', TRUE);
			$this->session->set_userdata($scores);

		}

		if ($this->session->userdata('initialize_score') == TRUE) {

			$array_session = $this->session->all_userdata();

			$score = 0;

			foreach ($array_session as $key => $value) {
				
				if (substr($key, 0, 6) == 'score_') {
					if ($value == 1) {
						$score++;
					}
				}

			}

			$this->total_score = $score;

		}

	}

}