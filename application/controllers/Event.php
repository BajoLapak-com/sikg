<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    public function index()
    {
        $data = [
            'isi'=>'event/v_add'
        ]; 
        $this->load->view('layout/v_wrapper', $data, FALSE);
        
    }

}

/* End of file Event.php */

?>