<?php
Class Location_model extends CI_Model{
    
    function listloc(){
        $query = $this->db->query("SELECT * FROM `location` INNER JOIN `vehicule` ON `location`.vehicule_id = `vehicule`.id;");
        return $query->result_array();
    }
    function check_date(){
        $this->load->database();
        $sql = "SELECT `date_debut` FROM `location`";
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    function annul_location($id){
        $now = date("Y-m-j");


        $this->db->where("id", $id); 

        $date = $this->db->get("location");
        $date_debut = $date[0]["date_debut"];

        return $date_debut->result_array();

        if($date<$now){
           // $this->db->delete('location', $data);
            return "peut etre supr";

        }
        else{
            return "est déja passer peut pas etre passer";
        }

    }

}