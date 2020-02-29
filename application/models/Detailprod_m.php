<?php

class Detailprod_m extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function last(){
		$this->db->select_max('id');
		$query = $this->db->get('detail_prod');
		return $query->result(); 
	}

	function get(){
		$q= $this->db->get('detail_prod');
		return $q->result();
	}

	function getWhere($key, $id){
		$q= $this->db->get_where('detail_prod', array($key => $id));
		return $q->result();
	}

	function insert(){
		$data = array(
			'id_prod' => $this->input->post('id_prod'),
			'id_model' => $this->input->post('id_model'),
			'jam0' => $this->input->post('jam0'),
			'jam1' => $this->input->post('jam1'),
			'qty' => $this->input->post('qty'),
			'remark' => $this->input->post('remark'),
		);

		return $this->db->insert('detail_prod', $data);
	}

	function update(){
		$data = array(
			'id_model' => $this->input->post('id_model'),
			'jam0' => $this->input->post('jam0'),
			'jam1' => $this->input->post('jam1'),
			'qty' => $this->input->post('qty'),
			'remark' => $this->input->post('remark'),
		);

		$id = $this->input->post('id');
		$this->db->where('id', $id);
		return $this->db->update('detail_prod', $data);
	}

	function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('detail_prod');
	}
}