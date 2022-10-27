<?php
class Veh extends CI_Controller{

public function Add() {
    $this->load->library('session');
    $this->load->library('form_validation');
    $this->load->database();
    $this->load->view('Veh_add_admin');

    if($this->form_validation->run() == FALSE){
    $this->form_validation->set_rules('type_vehicule', 'Type_vehicule', 'required');
    $this->form_validation->set_rules('kilometrage', 'Kilometrage', 'required');
    $this->form_validation->set_rules('nb_places', 'Nb_places', 'required');
    $this->form_validation->set_rules('marque', 'Marque', 'required');
    $this->form_validation->set_rules('modele', 'Modele', 'required');
    $this->form_validation->set_rules('puissance', 'Puissance', 'required');
    $this->form_validation->set_rules('prix_location', 'Prix_location', 'required');
    $this->form_validation->set_rules('puissance', 'Puissance', 'required');
    $this->form_validation->set_rules('etat', 'Etat', 'required');
    $this->form_validation->set_rules('vitesse_max', 'Vitesse_max', 'required');
    
    $this->load->model('Veh_model');
    $data['error'] = $this->Veh_model->Veh_action();
    }
}

function Liste(){
    $this->load->model('Veh_model');
    $data['vehArray'] = $this->Veh_model->list();
    $this->load->view('Veh_list',$data);
}

public function delete($id){
    $this->load->model('Veh_model');
    $this->load->helper('url');

    $location = $this->Veh_model->check_location($id);
    if(!$location){
        $this->Veh_model->delete_veh($id);
        redirect('Veh/liste');  
    }
    else{
                echo("
        <div>Ce vehicule a une location en cour, ne le supprime pas !</div>
        <a href='http://localhost/sae301_awen_soanne/codeigniter/index.php/Veh/liste'>retour</a>
        
        ");


    }
    
    
    
}

}

?>