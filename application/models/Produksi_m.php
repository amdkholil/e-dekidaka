<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produksi_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}

	function get(){
		$y = $this->db->get('produksi');
		return $y->result();
	}

	function getWhere($key, $id){
		$this->db->group_by('tanggal');
		$y = $this->db->get_where('produksi', array($key => $id));
		return $y->result();
	}

	function getWheres($x){
		//$
		$y = $this->db->where($x);
		$y = $this->db->get('produksi');
		return $y->result();
	}

	function insert(){
		$data = array(
			'id_line' => $this->input->post('line'),
			'tanggal' => $this->input->post('tanggal'),
			'shift' => $this->input->post('shift')
		);

		return $this->db->insert('produksi', $data);
	}

	function last(){
		$this->db->select_max('id');
		$query = $this->db->get('produksi');
		return $query->result(); 
	}

}

/* End of file Produksi_m.php */
/* Location: ./application/models/Produksi_m.php */