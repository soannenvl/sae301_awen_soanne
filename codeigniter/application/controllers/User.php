<?php
class User extends CI_Controller{

    function __construc(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
    }

public function login() {
$this->load->library('session');
$this->load->library('form_validation');
$this->load->model('Register_model');
$this->load->database();

$this->form_validation->set_rules('email', 'Email', 'required');
$this->form_validation->set_rules('password', 'Password', 'required');
$this->Register_model->login();
$this->load->view('login');
		
}

public function Register() {
    $this->load->library('session');
    $this->load->library('form_validation');
    $this->load->database();
    $this->load->view('register');

    if($this->form_validation->run() == FALSE){
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('login', 'Login', 'required');
    $this->form_validation->set_rules('nom', 'Nom', 'required');
    $this->form_validation->set_rules('prenom', 'Prenom', 'required');
    $this->form_validation->set_rules('ddn', 'Ddn', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('verif_password', 'Verif_Password', 'required');
    


    $this->load->model('Register_model');
    $data['error'] = $this->Register_model->Register_action();
    }
}
}
