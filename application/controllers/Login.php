<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function action_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $check = $this->m_login->check_login("f_user_admin",$where)->num_rows();
        if($check > 0){
            $data_session = array(
                'name' => $username,
                'status' => "login",
                'logged_in' => TRUE
            );

            $this->session->set_userdata($data_session);
            // redirect(base_url("web/add"));
            redirect(base_url("admin/dashboard"));
        } else {
            echo "Gagal";
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect(base_url("login"));
    }

    public function index(){
		$this->load->view('admin/login');
    }
}