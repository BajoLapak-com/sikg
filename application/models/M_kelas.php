<?php
// || \\ array_push($data,['id_cuci' => $key->id_cuci,'nama_cuci' => $key->nama_cuci]);
    class M_Kelas extends CI_Model {

        public function __construct() {
            parent::__construct();
            $this->load->model('ModelItem','mi');
        }

        public function getKelas(){
            $this->db->select();
            return $this->db->get()->result();
        }
    }

?>