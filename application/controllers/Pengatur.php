<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengatur extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('line_m');
		$this->load->model('bm_m');
		$this->load->model('ng_m');
		$this->load->model('model_m');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('pengatur/index');
		$this->load->view('template/footer');
	}

	public function line()
	{
		$x['line']= $this->line_m->get();

		$this->load->view('template/header');
		$this->load->view('pengatur/line/index', $x);
		$this->load->view('template/footer');
	}

	public function add_line()
	{
		if(!$this->line_m->insert()){
			$this->session->set_flashdata('warning', $this->db->show_error());
		}else{
			$this->session->set_flashdata('success','Berhasil!');
			redirect(site_url('pengaturan/line'),'refresh');
		}

	}

	public function edit_line()
	{
		if(!$this->line_m->edit()){
			$this->session->set_flashdata('warning', $this->db->show_error());
		}else{
			$this->session->set_flashdata('success','Berhasil dirubah!');
			redirect(site_url('pengaturan/line'),'refresh');
		}
	}

	public function hapus_line($id)
	{
		if(!$this->line_m->hapus($id)){
			$this->session->set_flashdata('warning', $this->db->show_error());
		}else{
			$this->session->set_flashdata('success','Berhasil dihapus!');
			redirect(site_url('pengaturan/line'),'refresh');
		}
	}

	public function breakdown()
	{
		$x['bm']= $this->bm_m->get();
		$this->load->view('template/header');
		$this->load->view('pengatur/bm/index', $x);
		$this->load->view('template/footer');
	}

	public function add_bm()
	{
		if(!$this->bm_m->insert()){
			$this->session->set_flashdata('warning', $this->db->show_error());
		}else{
			$this->session->set_flashdata('success','Berhasil!');
			redirect(site_url('pengaturan/breakdown'),'refresh');
		}

	}

	public function edit_bm()
	{
		if(!$this->bm_m->edit()){
			$this->session->set_flashdata('warning', $this->db->show_error());
		}else{
			$this->session->set_flashdata('success','Berhasil dirubah!');
			redirect(site_url('pengaturan/breakdown'),'refresh');
		}
	}

	public function hapus_bm($id)
	{
		if(!$this->bm_m->hapus($id)){
			$this->session->set_flashdata('warning', $this->db->show_error());
		}else{
			$this->session->set_flashdata('success','Berhasil dihapus!');
			redirect(site_url('pengaturan/breakdown'),'refresh');
		}
	}

	public function noGood()
	{
		$x['ng']= $this->ng_m->get();
		$this->load->view('template/header');
		$this->load->view('pengatur/ng/index', $x);
		$this->load->view('template/footer');
	}

	public function add_ng()
	{
		if(!$this->ng_m->insert()){
			$this->session->set_flashdata('warning', $this->db->show_error());
		}else{
			$this->session->set_flashdata('success','Berhasil!');
			redirect(site_url('pengaturan/nogood'),'refresh');
		}

	}

	public function edit_ng()
	{
		if(!$this->ng_m->edit()){
			$this->session->set_flashdata('warning', $this->db->show_error());
		}else{
			$this->session->set_flashdata('success','Berhasil dirubah!');
			redirect(site_url('pengaturan/nogood'),'refresh');
		}
	}

	public function hapus_ng($id)
	{
		if(!$this->ng_m->hapus($id)){
			$this->session->set_flashdata('warning', $this->db->show_error());
		}else{
			$this->session->set_flashdata('success','Berhasil dihapus!');
			redirect(site_url('pengaturan/nogood'),'refresh');
		}
	}

	public function model()
	{
		$x['model']= $this->model_m->get();
		$this->load->view('template/header');
		$this->load->view('pengatur/model/index', $x);
		$this->load->view('template/footer');
	}

	public function add_model()
	{
		if(!$this->model_m->insert()){
			$this->session->set_flashdata('warning', $this->db->show_error());
		}else{
			$this->session->set_flashdata('success','Berhasil!');
			redirect(site_url('pengaturan/model'),'refresh');
		}

	}

	public function edit_model()
	{
		if(!$this->model_m->edit()){
			$this->session->set_flashdata('warning', $this->db->show_error());
		}else{
			$this->session->set_flashdata('success','Berhasil dirubah!');
			redirect(site_url('pengaturan/model'),'refresh');
		}
	}

	public function hapus_model($id)
	{
		if(!$this->model_m->hapus($id)){
			$this->session->set_flashdata('warning', $this->db->show_error());
		}else{
			$this->session->set_flashdata('success','Berhasil dihapus!');
			redirect(site_url('pengaturan/model'),'refresh');
		}
	}
}

/* End of file Pengatur.php */
/* Location: ./application/controllers/Pengatur.php */