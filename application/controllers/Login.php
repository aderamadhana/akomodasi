<?php

class Login extends CI_controller
{
    function __construct(){
		parent::__construct();
		$this->load->model('LoginModel');
	}

    public function login()
	{
		$username       = $this->input->post('username');
        $password       = $this->input->post('password');
        
        $query = $this->LoginModel->aksiLogin($username, $password)->result();

        if($query > 0){
            foreach($query as $data){
                $id_user    = $data->id_user;
                $username   = $data->username;
                $role       = $data->role;
            }

            $sessionData = array(
                'id_user'   => $id_user,
                'username'  => $username,
                'role'      => $role,
                'logged_in' =>TRUE
            );

            $this->session->set_userdata($sessionData);
            
            if($role == 1){
               redirect('dashboardadmin');
            }else if($role == 2){
               redirect('dashboardpetugas');
            }


        }else{
            $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><b>Username</b> atau <b>Password</b> salah</div>');
            redirect('welcome');
        }
    }
    
    public function tbhUser()
    {
        $this->form_validation->set_rules('password', 'Password', 'required');
        $id=$this->session->userdata('id');
        if ($this->form_validation->run() == false) {
            redirect('login/validasi');
        } else {   
            $this->login_model->addUser();
            $this->login_model->deleteTmp($id);
            redirect('welcome/');
        }
    }

    public function regis()
	{
		$this->load->view('login/vRegister');
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('welcome/');
    }
}