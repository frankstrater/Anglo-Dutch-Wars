<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Geojson extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('gentdata_model');
		//$this->output->cache(5);
	}

	public function index()
	{
		$locaties_parking = $this->gentdata_model->get_locaties_parking();
		$locaties_taxi = $this->gentdata_model->get_locaties_taxi();
		$locaties_fiets = $this->gentdata_model->get_locaties_fiets();

		$data['locaties'] = array_merge($locaties_parking, $locaties_taxi, $locaties_fiets);
		$this->load->view('geojson', $data);
	}

	public function taxilocaties()
	{
		$data['locaties'] = $this->gentdata_model->get_locaties_taxi();
		$this->load->view('geojson', $data);
	}

	public function parkinglocaties()
	{
		$data['locaties'] = $this->gentdata_model->get_locaties_parking();
		$this->load->view('geojson', $data);
	}

	public function parkcaplocaties()
	{

		$url = "http://datatank.gent.be/Mobiliteitsbedrijf/Parkings11.json";

		$ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);
       	
       	$array_json = json_decode($output, true);

		print_r($array_json);
		exit;

		foreach ($array_json['Parkings11']['parkings'] as $item) {
			echo $item['name'];
		}
	}

	public function fietslocaties()
	{
		$data['locaties'] = $this->gentdata_model->get_locaties_fiets();
		$this->load->view('geojson', $data);
	}

}

/* End of file kml.php */
/* Location: ./application/controllers/kml.php */