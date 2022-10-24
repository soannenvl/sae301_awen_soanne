<?php
Class Vehicule_model extends CI_Model{
    function return_vehicules(){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM vehicule");
        return $query->result_array();
    }
}
?>