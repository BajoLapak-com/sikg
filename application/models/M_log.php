<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_log extends CI_Model {

    public function add($data){
        $this->db->insert('tbl_logbook', $data);
        return $this->db->insert_id();
        
    }
    public function list(){
        $this->db->select('*');
        $this->db->from('tbl_logbook');
        $this->db->where('id_guru', 1);
        
        return $this->db->get()->result(); 
        
        
    }
    public function detail(){
        $this->db->select('*');
        $this->db->from('tbl_logbook');
        return $this->db->get()->row(); 
        
        
    }

}

/* End of file M_log.php */

?>