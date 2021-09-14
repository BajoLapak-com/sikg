<!-- Goldian -->
<!-- question  -->
<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ujian extends CI_Controller
{

    public function index()
    {
        $data = [
            'isi' => 'ujian/v_list',
            'path' => 'ujian',
            'select' => [
                'mata pelajaran' => $this->getMataPelajaran(),
                'kelas' => $this->getKelas()
            ]
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
        $data = [];
        return $data;
    }

    /*post method
    /
    ----------------------------*/
    public function postUjian()
    {
        $data = [];
        return $data;
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