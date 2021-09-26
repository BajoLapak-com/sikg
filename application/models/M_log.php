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
    public function detail($id_log){
        $this->db->select('*');
        $this->db->from('tbl_logbook');
        $this->db->where('id_log', $id_log);
        
        return $this->db->get()->row(); 
        
        
    }
    public function delete($id){
        $this->db->where('id_log', $id);
        $this->db->delete('tbl_logbook');
        return  $this->db->affected_rows();
        
    }

}

/* End of file M_log.php */

?>