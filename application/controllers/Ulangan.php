<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Ulangan extends CI_Controller {

    public function index()
    {
        $data = [
            'isi'=>'ulangan/v_list',
            'path'=>'ulangan'
        ] ; 
        $this->load->view('layout/v_wrapper', $data, FALSE);
        
    }
    public function add(){

    }

}

/* End of file Ulangan.php */


?>