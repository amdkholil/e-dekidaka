<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ngdetail_m extends CI_Model
{
    public function __construct()
    {
        
    }

    public function getWhere($key,$id)
    {
        $q= $this->db->get_where('ng_detail', array($key => $id));
		return $q->result();
        
    }

    public function insert()
    {
        $data= array(
            'id_prod' => $this->input->post('id_prod'),
            'id_model' => $this->input->post('id_model'),
            'id_ng' => $this->input->post('id_ng'),
            'jam' => $this->input->post('jam'),
            'qty' => $this->input->post('qty'),
            'remark' => $this->input->post('remark')
        );

        return $this->db->insert('ng_detail', $data);
    }

    public function update()
    {
        $data= array(
            'id_model' => $this->input->post('id_model'),
            'id_ng' => $this->input->post('id_ng'),
            'jam' => $this->input->post('jam'),
            'qty' => $this->input->post('qty'),
            'remark' => $this->input->post('remark')
        );
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        return $this->db->update('ng_detail', $data);
    }

    function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('ng_detail');
	}

}



/* End of file filename.php */
