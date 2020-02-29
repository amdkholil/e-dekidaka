<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom{
    
    public function jam($i)
    {
        return date('H:i',strtotime($i));
    }

    public function ftgl($date)
    {
        return date('d-m-Y', strtotime($date));
    }

    public function actved($x, $y)
    {
        $z = ($x==$y) ? 'active' : '' ;
        return $z;
    }

}


/* End of file custom.php */
