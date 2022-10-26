<?php
Class Veh_model extends CI_Model{
    

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