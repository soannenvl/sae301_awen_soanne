<?php
Class Client_model extends CI_Model{

    function list(){
        $data=$this->session->userdata;
        return $data;
    }

    function supr_compte($id){
        $data=array('id'=>$id);
        $data = array(
            'id',
            'first_name',
            'last_name',
            'email',
            'login',
            'ddn',
            'password',
            'type'
            );
        $this->session->unset_userdata($data);
        $this->db->delete('utilisateur', $data);
    }

    function modif(){
    $this->load->library('session');
    $this->load->library('form_validation');

    if($this->form_validation->run() == FALSE){
        $this->load->library('session');
        $user=$this->session->userdata;
        $password=$user['password'];

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
        

            $data=array(
                'id'=>$user['id'],
                'login'=>$login,
                'password'=>$password,
                'nom'=>$nom,
                'prenom'=>$prenom,
                'ddn'=>$ddn,
                'email'=>$email,
                'type_utilisateur'=>"client"
                );

                $data2 = array(
                    'id' => $user['id'],
                    'first_name' => $prenom,
                    'last_name' => $nom,
                    'email' => $email,
                    'login' => $login,
                    'ddn' => $ddn,
                    'password' => $password,
                    'type' =>"client"
                    );
                
                $this->db->set($data);
                $this->db->where('id', $user['id']);
                $this->db->update('utilisateur');
                $this->session->set_userdata($data2);
    }
    }
}
?> 