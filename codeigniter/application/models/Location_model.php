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
        $query->result_array();

        $date = $query->result_array;
        $now = date("Y-m-j");
        $date_debut=$date[0]['date_debut'];
        
        if($now>$date_debut){
            return FALSE;     
        }
        elseif($now<$date_debut){
            return TRUE;  
        }
    }


    function annul_location($id){
        $data=array('id'=>$id);
        $this->db->delete('location', $data);
    }

}