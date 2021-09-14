<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Logbook extends CI_Controller {

    public function index()
    {
        $data= [
            'isi' =>'logbook/v_list',
            'path' => 'logbook'
        ]; 
        $this->load->view('layout/v_wrapper', $data);
        

    }

}

/* End of file .php */


?>