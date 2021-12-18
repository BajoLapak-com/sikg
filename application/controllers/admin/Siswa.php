<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_siswa', 'ms');
    }
    public function index()
    {
        $data = [
            'isi' => 'admin/siswa/v_list',

        ];
        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
    public function post()
    {
        $this->form_validation->set_rules('nama_siswa', 'Nama Siswa', 'required');

        if ($this->form_validation->run() == TRUE) {
            $data = [
                'nama_siswa' => $this->input->post('nama_siswa'),
                'jurusan' => $this->input->post('jurusan'),
            ];
            $this->load->library('ciqrcode'); //pemanggilan library QR CODE

            $config['cacheable']    = true; //boolean, the default is true
            $config['cachedir']     = './qrcode/'; //string, the default is application/cache/
            $config['errorlog']     = './qrcode/'; //string, the default is application/logs/
            $config['imagedir']     = './qrcode/gambar/'; //direktori penyimpanan qr code
            $config['quality']      = true; //boolean, the default is true
            $config['size']         = '1024'; //interger, the default is 1024
            $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
            $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
            $this->ciqrcode->initialize($config);

            $image_name = $data['nama_siswa'] . '.png'; //buat name dari qr code sesuai dengan nim

            $params['data'] = $data['nama_siswa']; //data yang akan di jadikan QR CODE
            $params['level'] = 'H'; //H=High
            $params['size'] = 10;
            $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder assets/images/
            $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
            $data['qr_code'] = $image_name;

            $this->ms->post($data);
        } else {
            # code...
        }
        $data = [
            'isi' => 'admin/siswa/v_add',
        ];


        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
    public function scan(){
        // $data = [
        //     'isi'=>'admin/siswa/scan'
        // ];
        $this->load->view('admin/siswa/scan', FALSE);

    }
}

/* End of file Siswa.php */
