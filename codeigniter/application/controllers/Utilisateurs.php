<?php
class Utilisateurs extends CI_Controller{
function Liste(){
        $this->load->model('Utilisateurs_model');
        $data['userArray'] = $this->Utilisateurs_model->list();
        $this->load->view('user-list',$data);

}
public function modif($id){
        $this->load->model('Utilisateurs_model');
        $this->load->helper('url');
        $this->Utilisateurs_model->modif_user($id);
        redirect('Utilisateurs/liste');
}

public function delete($id){
    $this->load->model('Utilisateurs_model');
    $this->load->helper('url');

    $this->Utilisateurs_model->delete_users($id);
    redirect('Utilisateurs/liste');
}

}
?>

