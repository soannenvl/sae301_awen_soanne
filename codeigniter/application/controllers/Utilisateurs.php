<?php
class Utilisateurs extends CI_Controller{
function Liste(){
        $this->load->model('Utilisateurs_model');
        $this->load->library('form_validation');
        $data['userArray'] = $this->Utilisateurs_model->list();
        $this->load->view('user-list',$data);

        if($this->form_validation->run() == FALSE){
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('login', 'Login', 'required');
            $this->form_validation->set_rules('id', 'Id', 'required');
            $this->load->model('Utilisateurs_model');
    }
}

public function delete($id){
    $this->load->model('Utilisateurs_model');
    $this->load->helper('url');

$this->Utilisateurs_model->delete_users($id);
$data['content']='delete_success';
$this->load->vars($data);
redirect('Utilisateurs/liste');
}

}
?>

