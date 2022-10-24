<?php

Class Check_user extends CI_Model{
    
    function check_user(){
        $this->load->database();
        $user=$this->input->post('user');
        $query = $this->db->query("SELECT * FROM utilisateur WHERE login='".$user."'");
        return $query->result_array();
    }
}
?>