<?php
class User extends CI_Controller{

    function __construc(){
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Check_user');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index(){
       $this->load->view('connexion');
    }
    
    public function connexion(){
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        if ($this->form_validation->run() === FALSE){  
            $this->load->view('connexion');
        }
    }

}




class Login extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        if($this->isLoggedin()){ redirect(base_url().'login/dashboard');}
        $data['title']='Login Boiler Plate';
        if($_POST)
        {
            $config=array(
                array(
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'trim|required'
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'trim|required'
                )
            );
            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == false) {
                // if validation has errors, save those errors in variable and send it to view
                $data['errors'] = validation_errors();
                $this->load->view('login',$data);
            } else {
                // if validation passes, check for user credentials from database
                $user = $this->Login_model->checkUser($_POST);
                if ($user) {
                // if an record of user is returned from model, save it in session and send user to dashboard
                    $this->session->set_userdata($user);
                    redirect(base_url() . 'Login/dashboard');
                } else {
                // if nothing returns from model , show an error
                    $data['errors'] = 'Sorry! The credentials you have provided are not correct';
                    $this->load->view('login',$data);
                }
            }
    
        }
        else
        {
            $this->load->view('login',$data);
        }
    
    }
    public function change_password()
    {
        if($this->isLoggedin()){
            $data['title']='Change Password';
            if($_POST)
            {
                $config=array(
                    array(
                        'field' => 'old_password',
                        'label' => 'Old Password',
                        'rules' => 'trim|required|callback_checkPassword'
                    ),
                    array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'trim|required'
                    ),
                    array(
                        'field' => 'conf_password',
                        'label' => 'Confirm Password',
                        'rules' => 'trim|required|matches[password]'
                    )
                );
                $this->form_validation->set_rules($config);
                if ($this->form_validation->run() == false)
                {
                    // if validation has errors, save those errors in variable and send it to view
                    $data['errors'] = validation_errors();
                    $this->load->view('change_password',$data);
                }
                else
                {
                    // if validation passes, check for user credentials from database
                    $this->Login_model->updatePassword($_POST['password'],$this->session->userdata['id']);
                    $this->session->set_flashdata('log_success','Congratulations! Password Changed');
                    redirect(base_url() . 'Login/dashboard');
                }
    
            }
            else
            {
                $this->load->view('change_password',$data);
            }
        }
        else
        {
            redirect(base_url().'Login');
        }
    
    }
    
    public function dashboard()
    {
        if($this->isLoggedin())
        {
            $data['title']='Welcome! You are logged in';
            $this->load->view('success',$data);
        }
        else
        {
            redirect(base_url().'Login');
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url().'Login');
    }
    
    public function isLoggedin()
    {
        if(!empty($this->session->userdata['id']))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    }
?>

