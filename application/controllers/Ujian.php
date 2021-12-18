<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Ujian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_ujian', 'mu');
        $this->load->library('uploadfile');
    }
    //  Jurusan 1 =multimedia ;
    // jurusan 2 = menjahit  ;
    // Nama File Soal sama dengan nama_guru_kelas_jurusan_mataPelajaran
    public function index()
    {

        $data = [
            'isi' => 'ujian/v_list',
            'path' => 'ujian',
            'data' => $this->mu->listUjian(),

        ];
        $this->load->view('layout/v_wrapper', $data);
    }

    /*get method
    /
    ----------------------------*/
    public function post()
    {
        $mapel = $this->input->post('mapel');

        $jurusan = $this->input->post('jurusan');
        $kelas = $this->input->post('kelas');
        $tgl_ujian = $this->input->post('tgl_ujian');

        try {
            //code...
            if (empty($_FILES)) {
                throw new Exception("File Upload Kosong");
            }
            $fileName = 'soal';
            $upload = $this->uploadfile->ujian($mapel,$kelas,$fileName);
            if (empty($upload)) {
                throw new Exception("Gagal Upload Soal");
            }

            $data = [
                'mapel' => $mapel,
                'id_guru' => 1,
                'jurusan' => $jurusan,
                'kelas' => $kelas,
                'tgl_ujian' => $tgl_ujian,
                'soal' => $upload['soal']

            ];
            $this->mu->post($data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }

        die();
    }
    public function readFile($fileName)
    {
        $path = "./fileUjian/" . $fileName;
        echo $path;
        header("Content-type: application/pdf");

        header("Content-Length: " . filesize($path));

        // Send the file to the browser.
        readfile($path);
    }
    public function detailUjian($id){
        $data = $this->mu->detailUjian($id) ;
        print_r($data) ;
    }

}

/* End of file Ujian.php */
