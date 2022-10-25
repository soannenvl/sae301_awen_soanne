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
$this->load->database();

$this->form_validation->set_rules('email', 'Email', 'required');
$this->form_validation->set_rules('password', 'Password', 'required');

if ($this->form_validation->run() == FALSE) {
    $this->load->view('login');
} else {

    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->db->get_where('utilisateur',['email' => $email])->row();

    if(!$user) {
        echo("Please check your email and try again.");
        //redirect('user/login');
        
    }
    if(md5($password)==$user->password){
        if($user->type_utilisateur=="agent"){
        $type="agent";
        $mdp="TRUE";
        }
        else{
            $mdp="TRUE";
        }
    }
    else{$mdp="FALSE";}

    if($mdp=="FALSE") {
        echo("Please check your password and try again.");
        //redirect('user/login'); 
    }
    elseif($mdp=="TRUE"){
        $data = array(
            'user_id' => $user->id,
            'first_name' => $user->prenom,
            'last_name' => $user->nom,
            'email' => $user->email,
            'type' =>$user->type_utilisateur
            );
            if($type=="agent"){
                echo 'Login success! agent ;)';
                redirect('CAMAAAAARCHE AGENT');
            }
            else{
                echo 'Login success!';
                redirect('CAMAAAAARCHE');
            }
        $this->session->set_userdata($data);

    }
     exit;
    
}		
}

public function Register() {
    $this->load->library('session');
    $this->load->library('form_validation');
    $this->load->database();
    $this->load->view('register');

    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('login', 'Login', 'required');
    $this->form_validation->set_rules('nom', 'Nom', 'required');
    $this->form_validation->set_rules('prenom', 'Prenom', 'required');
    $this->form_validation->set_rules('ddn', 'Ddn', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('verif_password', 'Verif_Password', 'required');
    
    $this->load->model('Register_model');
    $data['error'] = $this->Register_model->Register_verif();

}
}
