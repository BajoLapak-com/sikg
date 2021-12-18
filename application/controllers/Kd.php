<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kd extends CI_Controller {

    public function index()
    {
        $data = [
            'isi'=>'kd/v_list', 
            'path'=>'kd'
        ] ; 
        $this->load->view('layout/v_wrapper', $data, FALSE);
        
        
    }

}

/* End of file Kd.php */
?>