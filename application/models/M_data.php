<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model{
    function show_data(){
        return $this->db->get('f_products');
    }
    function delete_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }
    function edit_data($where,$table){
        return $this->db->get_where($table,$where);
    }
}