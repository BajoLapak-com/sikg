<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

    public function post($data){
        $this->db->insert('tbl_siswa', $data);
        return  $this->db->affected_rows();


    }



}

/* End of file M_siswa.php */



?>