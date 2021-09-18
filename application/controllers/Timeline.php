<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Timeline extends CI_Controller {

    public function index()
    {
        $data = [
            'isi'=>'timeline/v_list.php' , 
            'path'=>'timeline'
        ]   ; 
        $this->load->view('layout/v_wrapper', $data);
        
    }

}

/* End of file Timeline.php */


?>