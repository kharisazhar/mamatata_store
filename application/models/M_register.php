<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model{ 

    private $_table  = "f_user_admin";
    public $username;
    public $password;

    public function rules(){
        return [
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],
        ];
    }

    public function add_user(){
        $post = $this->input->post();
        $this->username = $post["username"];
        $this->password = md5($post["password"]);
        $this->db->insert($this->_table, $this);
    }

}