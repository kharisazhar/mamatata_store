<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model{
    
    private $_table  = "f_products";

    public $product_id;
    public $product_name;
    public $product_price;
    public $product_description;
    public $product_image = "default.jpg";

    public function rules(){
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],

            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }
 
    public function getById($id){
        return $this->db->get_where($this->_table, ["product_id" => $id]);
    }

    public function save(){
        $post = $this->input->post();
        $this->product_id = uniqid();
        $this->product_name = $post["name"];
        $this->product_price = $post["price"];
        $this->product_image = $this->_uploadImage();
        $this->product_description = $post["description"];
        $this->db->insert($this->_table, $this);
    }

    public function update(){
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->product_name = $post["name"];
        $this->product_price = $post["price"];
        
        if (!empty($_FILES["image"]["id"])) {
            $this->product_image = $this->_uploadImage();
        } else {
            $this->product_image = $post["old_image"];
        }

        $this->product_description = $post["description"];
        $this->db->update($this->_table, $this, array('product_id' => $post['id']));
    }

    public function delete($id){
        return $this->db->delete($this->_table, array("product_id" => $id));
    }

    private function _uploadImage(){
        $config['upload_path']          = './upload/product';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->product_id;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; //1MB

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')){
            return $this->upload->data('file_name');
        }

        return "default.jpg";
    }

    //detail model
    public function get_detail($id = null){
        $query = $this->db->get_where($this->_table, ["product_id" => $id]);
        if ($query->num_rows() > 0) {
            return ($query->result_array());
        }
        return false;
        // return $query;
    }
}