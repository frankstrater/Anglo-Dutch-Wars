<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ocd_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function get_ocd_xobject($id)
	{
		$this->db->select('*');
		$this->db->from('adw_xobjects');
		$this->db->where('id', $id);

		$query = $this->db->get();

		$array_xobject = $query->row_array();
		$array_xobject['url'] = base_url().'assets/img/xobjects/'.$array_xobject['url'];

		return $array_xobject;
	}

	public function get_ocd_object($ocd_source, $ocd_id)
	{
		$url = 'http://api.opencultuurdata.nl/v0/'.$ocd_source.'/'.$ocd_id;

		$ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);

		$array_painting = json_decode($output, TRUE);

		$data = array();

		$data['title'] = '';
		$data['author'] = '';
		$data['year'] = '';
		$data['collection'] = '';
		$data['rights'] = '';
		$data['url'] = '';

		if (!isset($array_painting['error'])) {

			if (isset($array_painting['title'])) {
				$data['title'] = $array_painting['title'];
			}

			if (isset($array_painting['authors'][0])) {
				$data['author'] = $array_painting['authors'][0];
			}

			if (isset($array_painting['date'])) {
				$data['year'] = substr($array_painting['date'],0,4);
			}

			$data['collection'] = $array_painting['meta']['collection'];
			$data['rights'] = $array_painting['meta']['rights'];
			$url_resolve = $array_painting['media_urls'][0]['url'];
			$data['url'] = $this->resolve_url($url_resolve);

		}

        return $data;
	}

	private function resolve_url($url) {

		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
		curl_setopt($ch, CURLOPT_NOBODY, true);
		$output = curl_exec($ch);
		curl_close($ch);

		preg_match_all('/^Location:(.*)$/mi', $output, $matches);

		$redirect_url = !empty($matches[1]) ? trim($matches[1][0]) : $url;
		$redirect_url = str_replace('%3Ds0', '=s1200', $redirect_url);

		return $redirect_url;

	}

}

/* End of file ocd_model.php */
/* Location: ./application/models/ocd_model.php */