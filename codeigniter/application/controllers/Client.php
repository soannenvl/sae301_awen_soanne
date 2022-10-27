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
        $this->load->view('modif_client',$data);
    }

    function modif(){
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('Client_model');

        $this->load->view('modif_client');
        $this->Client_model->modif();
    }
function check_date(){
    $now = date("Y-m-j");
}
    function annuler($id){
        $this->load->library('session');
        $this->load->model('location_model');
        $this->load->helper('url');
        $this->load->helper('date');

        $this->load->database();

        $date= $this->location_model->annul_location($id);
        print_r();
        //redirect('user/login');
    }

    function Locations(){
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->database();

        $this->load->model('Location_model');
        $data['location'] = $this->Location_model->listloc();
        $this->load->view('location_view', $data);        
    }
}
?>

