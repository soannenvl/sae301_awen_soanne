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

    if($password!=0){
        if($password==$verif_password){
            $error="FALSE";

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

                print_r($data);
                return $this->db->insert('utilisateur',$data);
                

                }
        else{
            $error="TRUE";
            return $error;}
    }
}
}
   
?>