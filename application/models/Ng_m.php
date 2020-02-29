<?php

class Ng_m extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function get(){
		$y = $this->db->get('t_ng');
		return $y->result();
	}

	function getWhere($id){
		$y = $this->db->get_where('t_ng', array('id' => $id));
		return $y->result();
	}

	function insert(){
		$data = array(
			'nama' => $this->input->post('ng')
		);

		return $this->db->insert('t_ng', $data);
	}

	function edit(){
		$id = $this->input->post('id');
		$data = array(
			'nama' => $this->input->post('ng')
		);
		$this->db->where('id', $id);
		return $this->db->update('t_ng', $data);
	}

	function hapus($id){
		$this->db->where('id', $id);
		return $this->db->delete('t_ng');
	}
}