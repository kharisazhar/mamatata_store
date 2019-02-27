<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
				$this->load->model('m_data');
				$this->load->model('m_product');
	}

	function delete($id){
		$where = array('product_id' => $id);
		$this->m_data->delete_data($where,'f_products');
		redirect('admin/table');
	}

	function edit($id){
		$where = array('product_id' => $id);
		$data["product"] = $this->m_data->edit_data($where, 'f_products')->result();
		$this->load->view('admin/v_navbar');
		$this->load->view('admin/v_edit',$data);
		$this->load->view('admin/v_footer');
	}

	function update(){
		$product = $this->m_product;
		$product->update();
		redirect('admin/table');
	}
}