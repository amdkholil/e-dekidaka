<?php

class Model_m extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function get(){
		$y = $this->db->get('model');
		return $y->result();
	}

	function getWhere($id){
		$y = $this->db->get_where('model', array('id' => $id));
		return $y->result();
	}

	function insert(){
		$data = array(
			'nama' => $this->input->post('model'),
			'part_number' => $this->input->post('pn')
		);

		return $this->db->insert('model', $data);
	}

	function edit(){
		$id = $this->input->post('id');
		$data = array(
			'nama' => $this->input->post('model'),
			'part_number' => $this->input->post('pn')
		);
		$this->db->where('id', $id);
		return $this->db->update('model', $data);
	}

	function hapus($id){
		$this->db->where('id', $id);
		return $this->db->delete('model');
	}
}