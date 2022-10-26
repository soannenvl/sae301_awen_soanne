<?php
Class Veh_model extends CI_Model{
    
function list(){
        $this->load->database();
        $query = $this->db->query("SELECT * FROM vehicule");
        return $query->result_array();
    }

    function check_location($id){
        $this->load->database();
        $query = $this->db->get_where('location',['vehicule_id' => $id])->row();
        return $query->result_array();
    }
    
    function delete_veh($id){
        $data=array('id'=>$id);
        $this->db->delete('vehicule', $data);
    }

function veh_action(){
    $this->load->library('form_validation');
    $this->load->database();

    $type_vehicule= $this->input->post('type_vehicule');
    $kilometrage= $this->input->post('kilometrage');
    $nb_places= $this->input->post('nb_places');
    $marque= $this->input->post('marque');
    $modele= $this->input->post('modele');
    $puissance= $this->input->post('puissance');
    $prix_location= $this->input->post('prix_location');
    $etat= $this->input->post('etat');
    $vitesse_max= $this->input->post('vitesse_max');

    if($nb_places!=0){
                    $data=array(
                        'id'=>"",
                        'type_vehicule'=>$type_vehicule,
                        'kilometrage'=>$kilometrage,
                        'nb_places'=>$nb_places,
                        'marque'=>$marque,
                        'modele'=>$modele,
                        'puissance'=>$puissance,
                        'prix_location'=>$prix_location,
                        'etat'=>$etat,
                        'vitesse_max'=>$vitesse_max,
                        );

                        return $this->db->insert('vehicule',$data);
                }

    }


}
?>