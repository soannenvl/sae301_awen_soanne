<?php
Class Register_model extends CI_Model{

    function login(){
    if ($this->form_validation->run() == FALSE) {
    } else {
    
        $login = $this->input->post('email');
        $password = $this->input->post('password');
    
        $user = $this->db->get_where('utilisateur',['email' => $login])->row();
        if(!$user) {
                return("Please check your email and try again.");
                redirect('User/login');
        }
        elseif(md5($password)==$user->password){
            $mdp="TRUE";
        }
        else{$mdp="FALSE";}

    
        if($mdp=="FALSE") {
            echo("Please check your password and try again.");
        }
    
        elseif($mdp=="TRUE"){
            $data = array(
                'id' => $user->id,
                'first_name' => $user->prenom,
                'last_name' => $user->nom,
                'email' => $user->email,
                'login' => $user->login,
                'ddn' => $user->ddn,
                'password' => $user->password,
                'type' =>$user->type_utilisateur
                );

                
                $this->session->set_userdata($data);
                
                if($user->type_utilisateur=="agent"){
                    echo 'Login success! agent ;)';
                    redirect('utilisateurs/liste');
                }
                else{
                    echo 'Login success!';
                    redirect('client/client');
                }
    
        }
    
    }
}
    

function Register_action(){
    $this->load->library('form_validation');
    $this->load->database();
    
    
    $email= $this->input->post('email');
    $login= $this->input->post('login');
    $nom= $this->input->post('nom');
    $prenom= $this->input->post('prenom');
    $ddn= $this->input->post('ddn');
    $password= $this->input->post('password');
    $verif_password= $this->input->post('verif_password');

    if($login!=0){
        $loginv = $this->db->get_where('utilisateur',['login' => $login])->row();
        $emailv = $this->db->get_where('utilisateur',['email' => $email])->row();
        if($password==$verif_password){
            if($login!=$loginv->login){
                if($email!=$emailv->email){
                    
                    $data=array(
                        'id'=>"",
                        'login'=>$login,
                        'password'=>md5($password),
                        'nom'=>$nom,
                        'prenom'=>$prenom,
                        'ddn'=>$ddn,
                        'email'=>$email,
                        'type_utilisateur'=>"client",
                        );
                        return $this->db->insert('utilisateur',$data);
                        $this->session->set_userdata($data);
                }
                else{$error="Email d??ja existant";
                return $error;}
            }
            else{$error="Login d??ja existant";
                return $error;}
        }
        else{
            $error="Password mauvais";
            return $error;}
    }
}
}
   
?>