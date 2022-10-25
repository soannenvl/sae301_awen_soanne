
<?php
Class Utilisateurs_model extends CI_Model{
    function list(){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM utilisateur");
        return $query->result_array();
    }
    function delete_users($id){
        $data=array('id'=>$id);
        $this->db->delete('utilisateur', $data);
    }
    function modif_user($id){
            $this->load->database();
            $data = array(
                'type_utilisateur' => "agent"
            );

            $this->db->update('utilisateur', $data);
            
    }
}

?> 