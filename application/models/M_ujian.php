<?php
// || \\ array_push($data,['id_cuci' => $key->id_cuci,'nama_cuci' => $key->nama_cuci]);
    class M_ujian extends CI_Model {

        public function postUjian($data){
            $this->db->insert('tbl_ujian', $data);
            return $this->db->affected_rows();
        }

        public function getUjian(){
            $this->db->select('*');
            $this->db->from('tbl_ujian');
            return $this->db->get()->result();
        }
    }
    
?>