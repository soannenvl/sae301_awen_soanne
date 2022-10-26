<?php
class location extends CI_Controller{
    //form de location

    //affichages des locations en cour d'un utilisateur

    //finaliser une location pour l'admin

    function annuler($id){
        $this->load->library('session');
        $this->load->model('Location_model');
        $this->load->helper('url');
        $this->load->database();

        $this->location_model->annul_location($id);

        //redirect('user/login');
    }

    function Locations(){
        $this->load->library('session');
        $this->load->library('form_validation');

        $this->load->model('Location_model');
        $data['Locationdata'] = $this->Location_model->list();
        //$this->load->view('option_client',$data);
    }
}
?>