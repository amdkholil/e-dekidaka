<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmdetail_m extends CI_Model
{
    
    public function __construct()
    {
        
    }

    public function get()
    {
        $q = $this->db->get('bm_detail');
        return $q->result();
    }


    public function getWhere($id)
    {
        $q= $this->db->get_where('bm_detail', array('id' => $id));
		return $q->result();
        
    }

    public function insert()
    {
        $data= array(
            'id_prod' => $this->input->post('id_prod'),
            'id_bm' => $this->input->post('bm'),
            'jam' => $this->input->post('jam'),
            'menit' => $this->input->post('menit'),
            'mesin' => $this->input->post('mesin'),
            'detail' => $this->input->post('detail'),
            'penanganan' => $this->input->post('action'),
            'pic' => $this->input->post('pic')
        );

        return $this->db->insert('bm_detail', $data);
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



/* End of file Bmdetail_m.php */