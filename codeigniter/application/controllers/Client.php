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
}
?>

