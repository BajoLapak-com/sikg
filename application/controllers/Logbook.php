<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Logbook extends CI_Controller {

    public function __construct()
    {
        parent::__construct(); 
        $this->load->model('m_log');
            
        
    }
    public function index()
    {
        $log = $this->m_log->list(); 
        $data= [
            'isi' =>'logbook/v_list',
            'log'=>$log , 
            'path' => 'logbook'
        ]; 
        $this->load->view('layout/v_wrapper', $data);
        

    }
    public function add(){
         $data = [
             'id_guru'=>1 , 
             'nama_kegiatan'=>$this->input->post('nama_kegiatan'), 
             'tgl_log'=>$this->input->post('tgl_log'),
             'target'=>$this->input->post('target'), 
             'masalah'=>$this->input->post('masalah'),
         ] ; 
         $this->m_log->add($data); 
    }
    public function delete($id){
        $data  =$this->m_log->delete($id); 
        if($data>0){
            echo "Sukses"; 
        }
        else{
            die(); 
        }
    }
    
    
}

/* End of file .php */


?>