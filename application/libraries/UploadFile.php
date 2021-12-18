<?php
class UploadFile{

    protected $ci ;
    protected $data ;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->data = [] ;

    }

    public function ujian($mapel,$kelas,$fileName){

        $this->ci->load->library('upload');
        $config['upload_path']          = './fileUjian/';
        $config['allowed_types']        = 'docx|pdf|doc';
        $config['file_name'] = 'Ujian_'.$kelas.'_'.$mapel ;
        $this->ci->upload->initialize($config)  ;

        if ( ! $this->ci->upload->do_upload($fileName))
        {
                $error = array('error' => $this->ci->upload->display_errors());
                echo "File Gagal Di Upload,,!! Errornya : ".$error['error'] ;

        }
        else
        {

            $datax = array('upload_data' => $this->ci->upload->data());
            $data=[
               'soal'=> $this->ci->upload->data()['file_name'],

            ]  ;
            return $data ;


        }

    }

    public function convertDoc(){

    }


}


?>