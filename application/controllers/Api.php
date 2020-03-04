<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('line_m');
    }
    

    public function index()
    {
        
    }

    public function lines($id)
    {       
        $x = $this->line_m->getWhere($id);
        $res = json_encode($x);
        echo $res;
        
    }

}

/* End of file Controllername.php */
