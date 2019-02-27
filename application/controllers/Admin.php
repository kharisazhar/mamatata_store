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
        $this->load->model('m_data');
		$this->load->library('form_validation');
    }

    public function add(){
		$product = $this->m_product;
		$validation = $this->form_validation;
		$validation->set_rules($product->rules());

		if($validation->run()) {
			$product->save();
			$this->session->set_flashdata('success', 'Berhasil di simpan');
		}
		if(isset($_SESSION['logged_in'])){
            $this->load->view('admin/v_navbar');
            $this->load->view('admin/dashboard');
            $this->load->view('admin/v_footer');
		}
	}

    public function index(){
		$this->load->view('admin/login');
    }

    function dashboard(){
        $this->load->view('admin/v_navbar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/v_footer');
    }

    function register() {
        $this->load->view('admin/register');
    }

    function table(){
        $this->load->view('admin/v_navbar');
        // $this->load->view('admin/table');
        $data["products"] = $this->m_data->show_data()->result();
		$this->load->view('admin/table',$data);
        $this->load->view('admin/v_footer');
    }
}