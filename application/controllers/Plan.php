<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Plan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('plan/index');
		$this->load->view('template/footer');
	}

}

/* End of file Plan.php */
/* Location: ./application/controllers/Plan.php */