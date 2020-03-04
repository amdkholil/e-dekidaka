<?php
class Dashboard extends CI_Controller{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('line_m');
    }
    

    public function index()
    {
        $x['line'] = $this->line_m->get();
        $this->load->view('template/header');
        $this->load->view('dashboard', $x);
        $this->load->view('template/footer');
                
    }

};