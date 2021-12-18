<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {
    public function __construct(){
        parent::__construct(); 
        $this->load->model('m_jurusan');
        

    }

    public function index()
    {
        
    }
    public function tambahJurusan(){

        $data = [
            'nama_jurusan'=>$this->input->post('nama_jurusan'),
            'kelas'=>$this->iput->post('id_kelas'),
            // 'wali_kelas'=>$this->input->post('wali_kelas'),

        ]; 

    }
    public function listMapelJurusan(){

    }

}

/* End of file Jurusan.php */



?>