<?php
class Client extends CI_Controller{

    function supr($id){
        $this->load->library('session');
        $this->load->model('Client_model');
        $this->load->helper('url');
        $this->load->database();

        $this->Client_model->supr_compte($id);

        redirect('user/login');
    }

    function client(){
        $this->load->library('session');
        $this->load->library('form_validation');

        $this->load->model('Client_model');
        $data['clientUserdata'] = $this->Client_model->list();
        $this->load->view('option_client',$data);

    }

    function modif(){
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('Client_model');

        $this->form_validation->set_rules('login','','');
        $this->load->view('modif_client');
        $this->Client_model->modif();
    }

function annuler($id){
    $this->load->library('session');
    $this->load->model('location_model');
    $this->load->helper('url');
    $this->load->helper('date');
    $this->load->database();
    $date= $this->location_model->check_date();
    if($date==TRUE){
        $date= $this->location_model->annul_location($id);
    }
    elseif($date==FALSE){
        print('location en cour, vous ne pouvez pas la terminer !');
        redirect('client/locations');
    }
}

    function Locations($id){
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->database();

        $this->load->model('Location_model');
        $data['location'] = $this->Location_model->listloc($id);
        if(!$data['location']){
            echo("
            <div>Vous n'avez pas actuellement de location !</div>
            <a href='http://localhost/sae301_awen_soanne/codeigniter/index.php/client/'>retour</a>
            ");
        }
        else{
            $this->load->view('location_view', $data);   
        }
    }

    function veh(){
        $this->load->library('session');
        $this->load->library('form_validation');

        $this->load->model('Client_veh_model');
        $data['vehicule'] = $this->Client_veh_model->list();
        $this->load->view('vehicules',$data);
    }

    function location(){
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('Client_veh_model');
        $this->load->database();

        //$data['vehicule'] = $this->Client_veh_model->check_location();
        $this->load->view('new_location');

        $this->form_validation->set_rules('date_debut', 'Date_debut', 'required');
        $this->form_validation->set_rules('date_fin', 'Date_fin', 'required');
        $this->form_validation->set_rules('nb_km', 'nb_km ', 'required');



        $data = $this->Client_veh_model->create_loc();
            



        }
    }
?>

