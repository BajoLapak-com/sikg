<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_note extends CI_Model {

    public function post($data){
        $this->db->insert('tbl_note', $data);
        return $this->db->affected_rows();


    }


}

/* End of file M_note.php */



?>