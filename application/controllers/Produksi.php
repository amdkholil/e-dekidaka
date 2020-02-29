<?php

class Produksi extends CI_Controller{

	function __construct(){
		parent::__construct();
        $this->load->model('produksi_m');
        $this->load->model('line_m');
        $this->load->model('ng_m');
        $this->load->model('bm_m');
        $this->load->model('model_m');
        $this->load->model('detailprod_m');
        $this->load->model('ngdetail_m');
        $this->load->model('bmdetail_m');
        
        $this->load->library('custom');
        
	}

	function index(){
        $x['line'] = $this->line_m->get();
		$this->load->view('template/header');
		$this->load->view('produksi/index', $x);
		$this->load->view('template/footer');
    }

    function line($id){
        $x['line'] = $this->line_m->getWhere($id);
        $x['tgl'] = $this->produksi_m->getWhere('id_line',$id);
            $this->load->view('template/header');
            $this->load->view('produksi/line', $x);
            $this->load->view('template/footer');
    }

    function buatform(){
        $id_line    = $this->input->post('line');
        $tanggal    = $this->input->post('tanggal');
        $shift      = $this->input->post('shift');
        $cek = $this->produksi_m->getWheres(['id_line' => $id_line, 'tanggal' => $tanggal, 'shift' => $shift]);
        if(count($cek)==1){
            $this->session->set_flashdata('danger','Gagal! form sudah pernah dibuat');
            redirect(site_url('produksi/line/'.$id_line),'refresh');
        }else{
            if(!$this->produksi_m->insert()){
                $this->session->set_flashdata('warning', $this->db->show_error());
            }else{
                $q=$this->produksi_m->last();
                $this->session->set_flashdata('success','Berhasil!');
                redirect(site_url('produksi/dekidaka/'.$q[0]->id),'refresh');
            }
        }
    }

    function dekidaka($id){
        $prod= $this->produksi_m->getWhere('id',$id);
        $data['line'] =  $this->line_m->getWhere($prod[0]->id_line);
        $data['lines'] = $this->line_m->get();
        $data['detailprod'] = $this->detailprod_m->getWhere('id_prod',$id);
        $data['prod'] = $prod;
        $data['models'] = $this->model_m->get();
        $data['ng'] = $this->ng_m->get();
        $data['ng_detail'] = $this->ngdetail_m->getWhere('id_prod', $id);
        $data['bm'] = $this->bm_m->get();
        $data['bm_detail'] = $this->bmdetail_m->get();
            $this->load->view('template/header');
            $this->load->view('produksi/dekidaka', $data);
            $this->load->view('template/footer');
    }

    function addprod(){
        $id = $this->input->post('id_prod');
        if(!$this->detailprod_m->insert()){
            $this->session->set_flashdata('warning', $this->db->show_error());
        }else{
            $this->session->set_flashdata('success','Berhasil!');
            redirect(site_url('produksi/dekidaka/'.$id),'refresh');
        }
    }

    function editprod(){
        $id = $this->input->post('id_prod');
        if(!$this->detailprod_m->update()){
            $this->session->set_flashdata('warning', $this->db->show_error());
        }else{
            $this->session->set_flashdata('success','Berhasil diubah!');
            redirect(site_url('produksi/dekidaka/'.$id),'refresh');
        }
    }

    function delprod($id){
        if(!$this->detailprod_m->delete($id)){
            $this->session->set_flashdata('warning', $this->db->show_error());
        }else{
            $this->session->set_flashdata('success','Berhasil dihapus!');
            redirect($_SERVER['HTTP_REFERER'], 'refresh');
        }
    }

    public function addng()
    {
        $id = $this->input->post('id_prod');
        if(!$this->ngdetail_m->insert()){
            $this->session->set_flashdata('warning', $this->db->show_error());
        }else{
            $this->session->set_flashdata('success','Berhasil!');
            redirect(site_url('produksi/dekidaka/'.$id),'refresh');
        }
    }

    public function editng()
    {
        $id = $this->input->post('id_prod');
        if(!$this->ngdetail_m->update()){
            $this->session->set_flashdata('warning', $this->db->show_error());
        }else{
            $this->session->set_flashdata('success','Berhasil!');
            redirect(site_url('produksi/dekidaka/'.$id),'refresh');
        }
    }

    function delng($id){
        if(!$this->ngdetail_m->delete($id)){
            $this->session->set_flashdata('warning', $this->db->show_error());
        }else{
            $this->session->set_flashdata('success','Berhasil dihapus!');
            redirect($_SERVER['HTTP_REFERER'], 'refresh');
        }
    }

    public function addbm()
    {
        $id = $this->input->post('id_prod');
        if(!$this->bmdetail_m->insert()){
            $this->session->set_flashdata('warning', $this->db->show_error());
        }else{
            $this->session->set_flashdata('success','Berhasil!');
            redirect(site_url('produksi/dekidaka/'.$id),'refresh');
        }
    }


}