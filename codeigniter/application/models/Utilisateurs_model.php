
<?php
Class Utilisateurs_model extends CI_Model{
    function list(){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM utilisateur");
        return $query->result_array();
    }
    function delete_users($id){
        $this->load->database();
        $data=array('id'=>$id);
        $this->db->delete('utilisateur', $data);
    }
    function modif_user(){
        
    }
}
//DELETE FROM utilisateur WHERE `utilisateur`.`id` = 16  
?> 