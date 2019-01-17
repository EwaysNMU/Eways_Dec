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
    public function delete_photo() {
        $admin_id = $this->session->userdata('admin_ID');
        $data["info"] = $this->Admin_model->get_user_admin();
        foreach ($data['info']->result() as $row) {
            $db_photo = $row->photo; //or whatever the query returns
        }
        $photo = "no_profile.jpeg";
        $this->Admin_model->remove_photo($admin_id, $photo);
        unlink(FCPATH . "uploads/user_profiles/" . $db_photo);
        redirect('admin/profile');
    }
    public function update_profile() {
        if (isset($_POST['upload'])) {
            $admin_ID = $this->session->userdata('admin_id');
            $imgFile = $_FILES['userfile']['name'];
            $tmp_dir = $_FILES['userfile']['tmp_name'];
            $imgSize = $_FILES['userfile']['size'];
            $userpic = '';
            if ($imgFile) {
                $upload_dir = 'uploads/user_profiles/'; // upload directory		
                $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
                $userpic = $admin_ID . rand(1000, 1000000) . "." . $imgExt;

                if (in_array($imgExt, $valid_extensions)) {
                    if ($imgSize < 5000000) {
                        $upload_result = move_uploaded_file($tmp_dir, $upload_dir . $userpic);
                    } else {
                        $this->session->set_flashdata('flash_error_large', 'error');
                        redirect('admin/profile');
                    }
                } else {
                    $this->session->set_flashdata('flash_error', 'error');
                    redirect('admin/profile');
                }
            } else {
                
            }
            if ($userpic == NULL) {
                $userpic = $this->input->post('db_photo');
            }
            $admin_id = $this->session->userdata('admin_ID');
            $fname = $this->input->post('f_name');
            $lname = $this->input->post('l_name');
            if ($this->Admin_model->update_admin($admin_id, $fname, $lname, $userpic)) {
                $this->session->set_flashdata('flash_profile', 'Profile Updated');
                redirect('admin/profile');
            } else {
                redirect('admin/profile');
            }
        }
    }

}
