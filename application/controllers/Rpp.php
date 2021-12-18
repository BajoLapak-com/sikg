<!-- Dio  -->
<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Rpp extends CI_Controller
{

    public function index()
    {
        $data = [
            'isi' => 'rpp/v_list',
            'path' => 'rpp'
        ];
        $this->load->view('layout/v_wrapper', $data);
    }
    public function postData(){
        $fileName = 'Data Rpp' ;

        $this->fileUpload($fileName);
    }
    public function fileUpload()
    {

        $config['upload_path'] = './fileRpp/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1002;
        $config['max_height'] = 768;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            // $this->load->view()
            print_r($error) ;
            return false ;

        }
        else{
            $data=array('upload_data'=>$this->upload->data());
            return true ;
            // $this->load->view('upload_success)

        }
    }
}

/* End of file .php */


?>