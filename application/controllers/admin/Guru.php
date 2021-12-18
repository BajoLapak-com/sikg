<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    public function index()
    {

        $data =[
            'isi'=>'admin/guru/v_list'
        ];
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);


    }
    public function add(){
        $data = [
            'isi' =>'admin/guru/v_add'
        ] ;
        $this->load->view('admin/layout/v_wrapper',$data , FALSE) ;
    }

}

/* End of file Guru.php */

?>