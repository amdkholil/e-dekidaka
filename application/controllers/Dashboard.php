<?php
class Dashboard extends CI_Controller{


    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('dashboard');
        $this->load->view('template/footer');
                
    }

};