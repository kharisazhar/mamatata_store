<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('m_product');
		$this->load->library('form_validation');
	}
	
	public function index()
	{	
		$data["product"] = $this->m_product->getAll();
		$this->load->view('v_nav');
		$this->load->view('v_index', $data);
		$this->load->view('v_footer');
	}

	public function product()
	{
		$data["product"] = $this->m_product->getAll();
		$this->load->view('v_nav');
		$this->load->view('v_product', $data);
		$this->load->view('v_footer');
	}

	public function product_detail($id)
	{
		$data["product"] = $this->m_product->getAll();
		$this->load->view('v_nav');
		$this->load->model('m_product');
		$detail = $this->m_product->get_detail($id);
		$data['detail'] = $detail;
		$this->load->view('v_product_detail', $data);
		$this->load->view('v_footer');
	}

	public function blog()
	{
		$data["product"] = $this->m_product->getAll();
		$this->load->view('v_nav');
		$this->load->view('v_blog', $data);
		$this->load->view('v_footer');
	}

	public function blog_detail()
	{
		$data["product"] = $this->m_product->getAll();
		$this->load->view('v_nav');
		$this->load->view('v_blog_detail', $data);
		$this->load->view('v_footer');
	}

	public function about()
	{
		$this->load->view('v_nav');
		$this->load->view('v_about');
		$this->load->view('v_footer');
	}

	public function contact()
	{
		$this->load->view('v_nav');
		$this->load->view('v_contact');
		$this->load->view('v_footer');
	}

	public function cart()
	{
		$this->load->view('v_nav');
		$this->load->view('v_cart');
		$this->load->view('v_footer');
	}

	public function edit($id = null){
		
		if(!isset($id)) redirect('admin/product');

		$validation = $this->form_validation;
		$validation->set_rules($product->rules());

		if($validation->run()){
			$product->update();
			$this->session->set_flashdata('success','Berhasil dispimpan');
		}

		$data["product"] = $product->getById($id);
		if (!$data["product"]) show_404();

		$this->load->view("admin/product/edit_form",$data);
	}

	public function delete($id=null){
		if(!isset($id)) show_404();

		if($this->model_product->delete($id)) {
			redirect(site_url('admin/product'));
		}
	}

	public function productById($id = null){
		if ($id){
			$data["product"] = $product->getById($id);
		} else{
			show_404();
		}
	}	
	
}
