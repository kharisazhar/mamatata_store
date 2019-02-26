<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_register');
        $this->load->library('form_validation');
    }

    public function save(){
        $user = $this->m_register;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
        if($validation->run()) {
            $user->add_user();
            echo "success added user";
        }
    }
}