<?php
Class Register_model extends CI_Model{


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
                else{$error="Email déja existant";
                return $error;}
            }
            else{$error="Login déja éxistant";
                return $error;}
        }
        else{
            $error="Password mauvais";
            return $error;}
    }
}
}
   
?>