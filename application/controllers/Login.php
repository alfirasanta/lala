<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }
    
    public function index()
    {
        if($this->session->userdata('logged_in') == TRUE) {   
          redirect('Welcome/index', 'refresh');
        } else {
            $this->load->view('view/login.php');
        }
    }

    public function cek_login(){
    if ($this->session->userdata('logged_in') == FALSE) {

        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            if ($this->Login_model->cek_user() == TRUE){
                redirect('Welcome/index', 'refresh');
            } else {
                $this->session->set_flashdata('notif', 'Username atau Password salah');
                redirect('Login/index', 'refresh');  
            }
        } else {
            $this->session->set_flashdata('notif', validation_errors());
        }

    } else {
        redirect('Welcome/index', 'refresh'); 
    }
    }

    public function register()
    {
        $this->load->view('view/register_user.php');
    }

    public function register_admin()
    {
        $this->load->view('view/register_admin.php');
    }

    public function tambah_user()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('nama_user', 'nama_user', 'trim|required');
        $this->form_validation->set_rules('level', 'level', 'trim|required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('psn','Gagal Mendaftarkan Diri');
            $this->load->view('view/register_user', 'refresh');
        }

        else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $nama_user = $this->input->post('nama_user');
            $level = $this->input->post('level');
            
            $data = array('username' => $username,
                          'password' => $password,
                          'nama_user' => $nama_user,
                          'level' => $level
                        );

        $this->Login_model->tambah($data);
        $this->session->set_flashdata('psn','Sukses Mendaftarkan Diri');
        redirect('Login/index', 'refresh');
            }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login/index', 'refresh');
    }
}

?>