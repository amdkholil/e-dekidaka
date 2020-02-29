<?php

class Line_m extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function get(){
		$y = $this->db->get('line');
		return $y->result();
	}

	function getWhere($id){
		$y = $this->db->get_where('line', array('id'=>$id));
		return $y->row();
	}

	function insert(){
		$data = array(
			'nama' => $this->input->post('line')
		);

		return $this->db->insert('line', $data);
	}

	function edit(){
		$id = $this->input->post('id');
		$data = array(
			'nama' => $this->input->post('line')
		);
		$this->db->where('id', $id);
		return $this->db->update('line', $data);
	}

	function hapus($id){
		$this->db->where('id', $id);
		return $this->db->delete('line');
	}
}