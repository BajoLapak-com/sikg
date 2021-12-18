<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Timeline extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_note', 'mn');


    }
    public function index()
    {
        $data = [
            'isi'=>'timeline/v_list.php' ,
            'path'=>'timeline'
        ]   ;
        $this->load->view('layout/v_wrapper', $data);

    }
    public function post(){
        $data = [
            'isi_note'=>$this->input->post('isi_note'),
        ];
        $this->mn->post($data) ;
        redirect('Timeline') ;

    }

}

/* End of file Timeline.php */


?>