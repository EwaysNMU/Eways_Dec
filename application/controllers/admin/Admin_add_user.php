<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_add_user extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model', '', TRUE);
               if ( ! $this->session->userdata('admin_ID','username','firstname','lastname','type'))
    {
        $allowed = array(
             // All allowed function names for not logged in users ( i keep it empty usually)
        );
        if ( ! in_array($this->router->fetch_method(), $allowed))
        {
            redirect('/admin/login');
        }
    }
    }

    public function index() {
        
    }

    public function add_user_view() {
       $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/admin_add_user');
        $this->load->view('layouts/admin_footer');
    }
    function encrypt_password($password, $email) {
        $rotations = 1;
        $salt = hash('sha256', uniqid(mt_rand(), true) . "somesalt" . strtolower($email));
        $hash = $salt . $password;
        for ($i = 0; $i < $rotations; $i ++) {
            $hash = hash('sha256', $hash);
        }
        return $salt . $hash;
    }
    
    public function add_user() {
        $this->form_validation->set_rules('f_name', 'First Name', 'required');
        $this->form_validation->set_rules('l_name', 'Last Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirmation Password', 'required|matches[password]');
       
         if ($this->form_validation->run() == FALSE) {
              $this->add_user_view();
         }
         else{
             $email = $this->input->post('f_name').".".$this->input->post('l_name'). '@mandela.ac.za';
             $password = $this->input->post('password');
             $data = array(
                'first_name' => $this->input->post('f_name'),
                'last_name' => $this->input->post('l_name'),
                 'type' => "CTLM",
                  'username' => $email,
                'password' => $this->encrypt_password($password, $email),
            );
             $this->Admin_model->add_user($data);
             $this->session->set_flashdata('flashSuccess', 'User Added');
             redirect("/admin_home");
         }
    }


}
