<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

    public function __construct(){
        parent::__construct(); 
        $this->load->model('M_kelas','mk');
        
    }
    public function index()
    {
        $list = $this->mk->list(); 
        $data = [
            'data'=>$list , 
            'isi'=>'admin/guru/'
        ] ; 
        $this->load->view('', $data, FALSE);
        
    }
    public function kelas(){

    }
    public function list(){

    }
    public function tambahKelas(){

    }
}

/* End of file Kelas.php */





?>