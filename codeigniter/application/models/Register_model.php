<?php
Class Register_model extends CI_Model{


function Register_verif() {
    $this->load->library('form_validation');
    $this->load->database();

    $email= $this->input->post('email');
    $login= $this->input->post('login');
    $nom= $this->input->post('nom');
    $prenom= $this->input->post('prenom');
    $ddn= $this->input->post('ddn');
    $password= $this->input->post('password');
    $verif_password= $this->input->post('verif_password');

        if($password==$verif_password){
            $error="FALSE";
            return $error;

            $data=array(
                'id'=>5,
                'login'=>$login,
                'password'=>$password,
                'nom'=>$nom,
                'prenom'=>$prenom,
                'ddn'=>$ddn,
                'email'=>$email,
                'type_utilisateur'=>"client",
                );

                
                return $this->db->insert('utilisateurs',$data);

                }
        else{
            $error="TRUE";
            return $error;}
    }
}
   
?>