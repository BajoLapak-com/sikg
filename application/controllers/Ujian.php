<!-- Goldian -->
<!-- question  -->
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ujian extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_ujian','mu');
    }

    public function index()
    {
        $data = [
            'isi' => 'ujian/v_list',
            'path' => 'ujian',
            'select' => [
                'mata pelajaran' => $this->getMataPelajaran(),
                'kelas' => $this->getKelas()
            ],
            'ujian' => $this->getUjian()
        ];
        $this->load->view('layout/v_wrapper', $data);
    }

    /*get method
    /
    ----------------------------*/
    public function getMataPelajaran()
    {
        $data = [
            'matematika',
            'bahasa indonesia',
            'bahasa inggris',
            'ipa'
        ];
        return $data;
    }
    public function getKelas()
    {
        $data = [
            'Kelas 1 A',
            'Kelas 2 A',
            'Kelas 3 A',
            'Kelas 4 A',
            'Kelas 5 A',
            'Kelas 6 A',
            'Kelas 1 B',
            'Kelas 2 B',
            'Kelas 3 B',
            'Kelas 4 B',
            'Kelas 5 B',
            'Kelas 6 B',
            'Kelas 1 C',
            'Kelas 2 C',
            'Kelas 3 C',
            'Kelas 4 C',
            'Kelas 5 C',
            'Kelas 6 C',
        ];
        return $data;
    }

    public function getUjian()
    {
        return $this->mu->getUjian();
    }

    /*post method
    /
    ----------------------------*/
    public function postUjian()
    {
        $data = [
            'id_guru' => 1,
            'id_mata_pelajaran' => $this->input->post('matapelajaran'),
            'id_kelas' => $this->input->post('kelas'),
            'rata_nilai' => 0,
            'tgl_ujian' => $this->input->post('tgl_ujian'),
            'tipe' => $this->input->post('tipe'),
            'file' => $this->input->post('file'),
        ];

        $this->mu->postUjian($data);
    }

    /*put method
    /
    ----------------------------*/
    public function putUjian()
    {
        $data = [];
        return $data;
    }

    /*delete method
    /
    ----------------------------*/
    public function deleteUjian()
    {
        $data = [];
        return $data;
    }
}

/* End of file Ujian.php */
?>