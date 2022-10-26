
<?php
Class Utilisateurs_model extends CI_Model{
    function list(){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM utilisateur");
        return $query->result_array();
    }

    public function count(){
        $this->load->database();
        $sql = "SELECT * FROM `utilisateur` WHERE type_utilisateur = 'agent'";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }

    function check_type($id){
        $this->load->database();
        $sql = "SELECT `type_utilisateur` FROM `utilisateur` WHERE id = ".$id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function delete_users($id){
        $data=array('id'=>$id);
        $this->db->delete('utilisateur', $data);
    }

    function modif_user_client($id){
            $this->load->database();

                $data = array(
                    'type_utilisateur' => "agent"
                );
                $this->db->set($data);
                $this->db->where('id', $id);
                $this->db->update('utilisateur');  
    }

    function modif_user_agent($id){
        $this->load->database();

            $data = array(
                'type_utilisateur' => "client"
            );
            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('utilisateur');  
}
}

?> 