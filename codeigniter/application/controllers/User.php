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
        $this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
        redirect('user/login');
        print("Please check your email and try again.");
        
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
        $this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
        redirect('user/login');
        print("Please check your password and try again.");
        
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
}
?>

