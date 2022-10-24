<?php
class Vehicule extends CI_Controller{
    function liste(){
        $this->load->model('Vehicule_model');
        $data['vehArray'] = $this->Vehicule_model->return_vehicules();
        $this->load->view('veh_view',$data);
    }
    function ajout(){
        $this->load->model('Vehicule_model');
        $data['vehAdd'] = $this->Vehicule_model->autrefonction();
        $this->load->view('veh_view',$data);
    }
}

?>