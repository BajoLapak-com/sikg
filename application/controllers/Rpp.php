<!-- Dio  -->
<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Rpp extends CI_Controller {

    public function index()
    {
        $data = [
            'isi'=> 'Guru/v_add'
        ]; 
        $this->load->view('layout/v_wrapper', $data);
        
        
    }

}

/* End of file Guru.php */


?>
