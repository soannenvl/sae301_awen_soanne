<?php
class Utilisateurs extends CI_Controller{
function Liste(){
        $this->load->model('Utilisateurs_model');
        $data['userArray'] = $this->Utilisateurs_model->list();
        $this->load->view('user-list',$data);

}
public function change($id){
        $this->load->model('Utilisateurs_model');
        $this->load->helper('url');

        $data = $this->Utilisateurs_model->count();
        $type = $this->Utilisateurs_model->check_type($id);
        
        if($type[0]['type_utilisateur']=="agent"){
                if($data>1){
                        $this->Utilisateurs_model->modif_user_agent($id);
                        redirect('Utilisateurs/liste');
                }
                echo("
                <div>c'est le dernier agent, ne le supprimer pas !</div>
                <a href='http://localhost/sae301_awen_soanne/codeigniter/index.php/Utilisateurs/liste'>retour</a>
                
                ");
        }
        elseif($type[0]['type_utilisateur']=="client"){    
                $this->Utilisateurs_model->modif_user_client($id);
                redirect('Utilisateurs/liste');
        }
}


public function delete($id){
        $this->load->model('Utilisateurs_model');
        $this->load->helper('url');
        
        $data = $this->Utilisateurs_model->count();
        if($data>1){
                $this->Utilisateurs_model->delete_users($id);
                redirect('Utilisateurs/liste');
        }
        else{
                $type = $this->Utilisateurs_model->check_type($id);
                if($type[0]['type_utilisateur']=="client"){
                        $this->Utilisateurs_model->delete_users($id);
                        redirect('Utilisateurs/liste');
                }
                echo("
                <div>c'est le dernier agent, ne le supprimer pas !</div>
                <a href='http://localhost/sae301_awen_soanne/codeigniter/index.php/Utilisateurs/liste'>retour</a>
                
                ");
        }
        
        
        
}

}
?>

