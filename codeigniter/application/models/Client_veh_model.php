<?php
Class Client_veh_model extends CI_Model{
    
function list(){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM vehicule");
        return $query->result_array();
    }

    function check_location($id){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM vehicule WHERE id=".$id);
        return $query->result_array();
    }



    function create_loc(){
        $this->load->library('form_validation');
        $this->load->database();
        //$loc = $this->db->get_where('location',['id' => $id])->row();
        
        if($this->form_validation->run() == FALSE){
        $this->load->library('session');
        $user=$this->session->userdata;

        $debut= $this->input->post('date_debut');
        $fin= $this->input->post('date_fin');
        $km= $this->input->post('nb_km');
        $prix="555"; //$loc->prix;

        if($debut!=""){
            $data=array(
                'id'=>"",
                'date_debut'=>$debut,
                'date_fin'=>$fin,
                'nb_km'=>$km,
                'prix'=>$prix,
                'utilisateur_id'=>$user['id'],
                'vehicule_id'=>'1'
            );
            
    
                return $this->db->insert('location',$data);
        }
        
    }
    
    }

}
?>