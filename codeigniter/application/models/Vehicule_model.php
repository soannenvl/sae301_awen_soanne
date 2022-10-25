<?php
Class Vehicule_model extends CI_Model{
    function return_vehicules(){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM vehicule");
        return $query->result_array();
    }
    function ajout(){
        $this->load->database();
        $query = $this->db->query("INSERT INTO vehicule(
        id, 
        type_vehicule, 
        kilometrage, 
        nb_places, 
        marque, 
        modele, 
        puissance, 
        prix_location, 
        etat, 
        vitesse_max)
        VALUES ($val, '$val', $val)");

        return $query->result_array();
    }
}

?> 