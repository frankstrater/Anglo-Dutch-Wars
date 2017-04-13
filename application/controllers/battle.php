<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Battle extends Public_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('battles_model');
		$this->load->model('ocd_model');

		$this->load->helper('form');

		//$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		redirect(site_url('home'));
	}

	public function view($id)
	{
		$data['battle'] = $this->battles_model->get_battle($id);
		$data['battle_commanders'] = $this->battles_model->get_battle_commanders($id);

		if (empty($data['battle'])) {
			show_404();
		}

		$winner_choice = $this->input->post('winner', TRUE);

		if ($winner_choice !== FALSE) {

			$score_id = 'score_'.$data['battle']['id'];

			if ($this->session->userdata($score_id) == 0) {

				if ($winner_choice == $data['battle']['winner']) {
					$this->session->set_userdata($score_id, 1);
				} else {
					$this->session->set_userdata($score_id, -1);
				}

			}

			redirect(site_url('battle/result/'.$data['battle']['id']));

		}

		$this->war_active = $data['battle']['war'];

		$prev_battle_id = 0;
		$next_battle_id = 0;

		$prev_battle_array = $this->battles_model->get_battle_prev($id, $data['battle']['war']);
		$next_battle_array = $this->battles_model->get_battle_next($id, $data['battle']['war']);

		if (isset($prev_battle_array['id'])) {
			$prev_battle_id = $prev_battle_array['id'];
		}

		if (isset($next_battle_array['id'])) {
			$next_battle_id = $next_battle_array['id'];
		}

		$data['battle']['prev_battle_id'] = $prev_battle_id;
		$data['battle']['next_battle_id'] = $next_battle_id;

		$this->load->view('header');
		$this->load->view('battle', $data);
		$this->load->view('footer');
	}

	public function result($id)
	{
		$data['battle'] = $this->battles_model->get_battle($id);
		$data['battle_commanders'] = $this->battles_model->get_battle_commanders($id);

		if (empty($data['battle'])) {
			show_404();
		}

		$this->war_active = $data['battle']['war'];

		if ($data['battle']['x_id'] != 0) {
			$data['ocd_object'] = $this->ocd_model->get_ocd_xobject($data['battle']['x_id']);
		} else {
			$data['ocd_object'] = $this->ocd_model->get_ocd_object('rijksmuseum',$data['battle']['ocd_id']);
		}

		$prev_battle_id = 0;
		$next_battle_id = 0;

		$prev_battle_array = $this->battles_model->get_battle_prev($id, $data['battle']['war']);
		$next_battle_array = $this->battles_model->get_battle_next($id, $data['battle']['war']);

		if (isset($prev_battle_array['id'])) {
			$prev_battle_id = $prev_battle_array['id'];
		}

		if (isset($next_battle_array['id'])) {
			$next_battle_id = $next_battle_array['id'];
		}

		$data['battle']['prev_battle_id'] = $prev_battle_id;
		$data['battle']['next_battle_id'] = $next_battle_id;

		$this->load->view('header');
		$this->load->view('battle_result', $data);
		$this->load->view('footer');
	}

	public function geojson($war) {

		// Mapbox GeoJSON

		$battle_id = $this->uri->segment(4, 0);

		$battles = $this->battles_model->get_battles_before($battle_id, $war);

		$array_geojson = array(
			'type'      => 'FeatureCollection',
			'features'  => array()
		);

	    foreach ($battles as $item) {

	    	$marker_color = ($item['id'] == $battle_id) ? '#800000' : '#000000';
	    	$marker_size = ($item['id'] == $battle_id) ? 'large' : 'medium';

			$feature = array(
					'type' => 'Feature',
					'geometry' => array(
						'type' => 'Point',
						'coordinates' => array($item['lng'],$item['lat'])
					),
					'properties' => array(
						'title' => $item['name'].', '.$item['year'],
						'description' => '',
						'marker-color' => $marker_color,
						'marker-size' => $marker_size,
						'marker-symbol' => 'danger'
						)
			);

			array_push($array_geojson['features'], $feature);

	    }

		header('Content-type: application/json');
		echo json_encode($array_geojson, JSON_NUMERIC_CHECK);

	}

}

/* End of file battle.php */
/* Location: ./application/controllers/battle.php */