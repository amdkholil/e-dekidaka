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


    public function getWhere($key,$id)
    {
        $q= $this->db->get_where('bm_detail', array($key => $id));
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
            'jam' => $this->input->post('jam'),
            'menit' => $this->input->post('menit'),
            'mesin' => $this->input->post('mesin'),
            'id_bm' => $this->input->post('bm'),
            'detail' => $this->input->post('detail'),
            'penanganan' => $this->input->post('actionls'),
            'pic' => $this->input->post('pic')
        );
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        return $this->db->update('bm_detail', $data);
    }

    function delete($id){
		$this->db->where('id', $id);
		return $this->db->delete('bm_detail');
	}


}



/* End of file Bmdetail_m.php */
