<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
        $this->load->model('m_product');
        
    }

    public function index(){
		$this->load->view('admin/login');
    }

    function dashboard(){
        $this->load->view('admin/dashboard');
    }

    function register() {
        $this->load->view('admin/register');
    }
}