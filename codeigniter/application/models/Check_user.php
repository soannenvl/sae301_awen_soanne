<?php

Class Check_user extends CI_Model{
    
    function password_verify(){
        $this->load->database();
        $email = $this->input->post('email');
        $user = $this->db->get_where('utilisateur',['email' => $email])->row();
        $query = $this->db->query("SELECT * FROM utilisateur WHERE email='".$user."'");
        print_r()
        return $query->result_array();
    }
}
?>