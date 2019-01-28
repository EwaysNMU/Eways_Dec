<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_events extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Events','events');
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

    public function admin_events() {
        
        
        $data['get_events'] = $this->events->getEvents();
        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/admin_events',$data);
        $this->load->view('layouts/admin_footer');
    }
    public function add_events_view() {
        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/resources/add_resources');
        $this->load->view('layouts/admin_footer');
    }
    public function edit_events_view($meg1,$meg2,$meg3) {
         $edit = array(
            'meg1' => $meg1,
            'meg2' => $meg2,
             'meg3' => $meg3,
        );
        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/resources/edit_resources',$edit);
        $this->load->view('layouts/admin_footer');
    }
    public function detailed_events_view($meg1,$meg2) {
         $detail = array(
            'meg1' => $meg1,
            'meg2' => $meg2,
        );
       $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/resources/detailed_resources',$detail);
        $this->load->view('layouts/admin_footer');
    }
    public function delete() {
         $resourceID = $this->uri->segment(3);
            $this->resources->delete($resourceID);
            echo json_encode(['comment_return' => 'Deleted!']);
//            $resources="Resources deleted";
//        $this->session->set_flashdata('flash_Success', $resources);
//        redirect("/admin/resources");
    }

    public function add_events() {

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
                        redirect('/admin/resources');
                    }
                } else {
                    $this->session->set_flashdata('flash_error', 'error');
                    redirect('/admin/resources');
                }
            }
            
            if ($this->input->post('type') == "Web Address") {
                    if ($this->input->post('web_url') =="") {
                        $this->session->set_flashdata('flash_error', 'A Web Address is required');
                         redirect('/admin/add_resources_');
                    }
                else{
                $data = array(
                'title' => $this->input->post('title'),
                'type' => $this->input->post('type'),
                'file_web_url' => $this->input->post('web_url'),
                'StaffID' => $this->session->userdata('admin_ID'),
                );}
            }
            else{
                if ($upload =="") {
                        $this->session->set_flashdata('flash_error', 'A '.$this->input->post('type').' upload is required');
                         redirect('/admin/add_resources_');
                    }
                    else{
                $data = array(
                'title' => $this->input->post('title'),
                'type' => $this->input->post('type'),
                'file_web_url' => $upload,
                'StaffID' => $this->session->userdata('admin_ID'),
                    );}
            }
            if ($this->resources->insert_resources($data)) {
                  $resources="Resources added";
        $this->session->set_flashdata('flash_Success', $resources);
                redirect('/admin/resources');
            } else {
                $this->admin_resources();
            }
        }
    }
    public function edit_events() {

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
                        redirect('/admin/resources');
                    }
                } else {
                    $this->session->set_flashdata('flash_error', 'error');
                    redirect('/admin/resources');
                }
            }
            if($upload == null)
            {
                $upload = $this->input->post('db_url');
            }
            if($this->input->post('type') == "Web Url"){
                $title = $this->input->post('title');
                $type = $this->input->post('type');
                $file_web_url = $this->input->post('web_url');
            }
            else{
                  $title = $this->input->post('title');
                $type = $this->input->post('type');
                $file_web_url = $upload;
            }
                $title = $this->input->post('title');
                $type = $this->input->post('type');
            $id = $this->input->post('id');
            if ($this->resources->update($id,$title,$type,$file_web_url)) {
                  $resources="Resources updated";
        $this->session->set_flashdata('flash_Success', $resources);
                redirect('/admin/resources');
            } else {
                $this->edit_resources();
            }
        }
    }

}
































































































































