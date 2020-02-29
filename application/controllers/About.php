<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
		$this->load->view('about/index');
		$this->load->view('template/footer');    
    }

}

/* End of file Controllername.php */


/* End of file .php */
