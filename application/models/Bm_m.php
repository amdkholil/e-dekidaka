<?php

class Bm_m extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function get(){
		$y = $this->db->get('t_bm');
		return $y->result();
	}

	function getWhere($id){
		$q= $this->db->get_where('t_bm', array('id' => $id));
		return $q->result();
	}

	function insert(){
		$data = array(
			'nama' => $this->input->post('bm')
		);

		return $this->db->insert('t_bm', $data);
	}

	function edit(){
		$id = $this->input->post('id');
		$data = array(
			'nama' => $this->input->post('bm')
		);
		$this->db->where('id', $id);
		return $this->db->update('t_bm', $data);
	}

	function hapus($id){
		$this->db->where('id', $id);
		return $this->db->delete('t_bm');
	}
}