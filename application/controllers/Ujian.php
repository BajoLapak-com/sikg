<!-- Goldian -->
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller {

    public function index()
    {
        $data = [
            'isi' => 'ujian/v_list',
            'select' => [
                'mata pelajaran' => $this->getMataPelajaran(),
                'kelas' => $this->getKelas()
            ]
        ];
        $this->load->view('layout/v_wrapper', $data);
    }

}

/* End of file Ujian.php */

?>