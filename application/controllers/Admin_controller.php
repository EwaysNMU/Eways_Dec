<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

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

    public function admin_home() {

        $data["home_count"] = $this->Student_model->count_home_visit();
        $data ['notes'] = $this->Admin_model->getNoRegisteredUser();
        $data ['completeTopic'] = $this->Admin_model->getNoCompleteTopic();
        $data ['completeCourse'] = $this->Admin_model->getNoCompleteCourse();
        $data ['activeUsers'] = $this->Student_model->count_active_users();

        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/admin_home', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_tables() {

        $data ['notes'] = $this->Admin_model->getRegisteredUser();
        if ($data ['notes'] == FALSE) {
            $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
            $this->load->view('admin/admin_home');
            $this->load->view('layouts/admin_footer');
        } else {
            $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
            $this->load->view('admin/admin_tables', $data);
            $this->load->view('layouts/admin_footer');
        }
    }

    public function admin_reg_user() {

        $data ['notes'] = $this->Admin_model->getRegisteredUser();
        if ($data ['notes'] == FALSE) {
            $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
            $this->load->view('admin/admin_home');
            $this->load->view('layouts/admin_footer');
        } else {
            $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
            $this->load->view('admin/admin_reg_user', $data);
            $this->load->view('layouts/admin_footer');
        }
    }

    public function admin_events() {
        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/admin_events');
        $this->load->view('layouts/admin_footer');
    }

    public function admin_course_management() {
        $this->load->view('admin/admin_course_management');
    }

    public function admin_resources() {
        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/admin_resources');
        $this->load->view('layouts/admin_footer');
    }
    public function admin_profile() {
        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/admin_user_profile',$data);
        $this->load->view('layouts/admin_footer');
    }

    public function add_resources() {

        if (isset($_POST['upload'])) {
            $imgFile = $_FILES['file']['name'];
            $tmp_dir = $_FILES['file']['tmp_name'];
            $imgSize = $_FILES['file']['size'];
            $upload = '';
            if ($imgFile) {
                $upload_dir = 'uploads/files/'; // upload directory		
                $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
                $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf'); // valid extensions
                $upload = rand(1000, 1000000) . "." . $imgExt;
                if (in_array($imgExt, $valid_extensions)) {
                    if ($imgSize < 5000000) {
                        $upload_result = move_uploaded_file($tmp_dir, $upload_dir . $upload);
                    } else {
                        $this->session->set_flashdata('flash_error_large', 'error');
                        redirect('/admin_resources');
                    }
                } else {
                    $this->session->set_flashdata('flash_error', 'error');
                    redirect('/admin_resources');
                }
            }
            if ($upload == NULL) {
                $upload = 'no_file';
            }
            $url = $this->input->post('web_url');
            if ($url == NULL) {
                $url = 'no_url';
            }
            $data = array(
                'title' => $this->input->post('title'),
                'type' => $this->input->post('type'),
                'web_url' => $url,
                'file_name' => $upload,
            );
            if ($this->Admin_model->insert_resources($data)) {
                redirect('/admin_resources');
            } else {
                $this->admin_resources();
            }
        }
    }

}





