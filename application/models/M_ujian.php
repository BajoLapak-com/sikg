<?php
// || \\ array_push($data,['id_cuci' => $key->id_cuci,'nama_cuci' => $key->nama_cuci]);
    class M_ujian extends CI_Model {

        public function post($data){
            $this->db->insert('tbl_ujian', $data);
            return $this->db->affected_rows();
        }

        public function listUjian(){
            $this->db->select('*');
            $this->db->from('tbl_ujian');
            return $this->db->get()->result();
        }
        public function detailUjian($id){
            $this->db->select('*');
            $this->db->from('tbl_ujian');
            $this->db->where('id_ujian', $id);
            return $this->db->get()->row() ;



        }
    }

?>