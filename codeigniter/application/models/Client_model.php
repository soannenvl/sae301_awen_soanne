<?php
Class Client_model extends CI_Model{

    function list(){
        $data=$this->session->userdata;
        return $data;
    }

    function supr_compte($id){
        $data=array('id'=>$id);
        $this->db->delete('utilisateur', $data);
    }

    function modif(){
        
        $this->load->library('session');
        $user=$this->session->userdata;

        $email= $this->input->post('email');
        if(!$email){$email=$user['email'];}

        $login= $this->input->post('login');
        if(!$login){$login=$user['login'];}

        $nom= $this->input->post('nom');
        if(!$nom){$nom=$user['last_name'];}

        $prenom= $this->input->post('prenom');
        if(!$prenom){$prenom=$user['first_name'];}

        $ddn= $this->input->post('ddn');
        if(!$ddn){$ddn=$user['ddn'];}

        $verif_password=$this->input->post('verif_password');
        $password=$this->input->post('password');

        if(!$password){$password=$user['password'];
            if(!$verif_password){$verif_password=$user['password'];}
        }

        elseif($password==$verif_password){
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
                
                //return $this->db->update('utilisateur',$data);
                //$this->session->set_userdata($data);
        }

            $data=array(
                'id'=>$user['id'],
                'login'=>$login,
                'password'=>md5($password),
                'nom'=>$nom,
                'prenom'=>$prenom,
                'ddn'=>$ddn,
                'email'=>$email,
                'type_utilisateur'=>"client",
                );
                
                $this->db->set($data);
                $this->db->where('id', $user['id']);
                $this->db->update('utilisateur');  
                $this->session->set_userdata($data);
        
    }

}
?> 