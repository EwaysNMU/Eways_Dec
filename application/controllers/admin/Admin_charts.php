<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_charts extends CI_Controller {

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

    public function admin_charts() {

        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/charts/admin_charts');
        $this->load->view('layouts/admin_footer');
    }

    function compareDates() {

        $start = $this->input->post('startDate');

        $end = $this->input->post('endDate');

        if ($start > $end) {
            $this->form_validation->set_message('compareDates', '<p style="color:red;">Your START date must be earlier than your END date</p>');

            return false;
        }
    }

    public function admin_charts_student_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_topics_per_student();
        } else {
            $this->admin_charts_topics_per_student();
        }
    }

    public function admin_charts_completed_topics_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_completed_topics_date();
        } else {
            $this->admin_charts_completed_topics_date();
        }
    }

    public function admin_charts_q1_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_q1();
        } else {
            $this->admin_charts_q1();
        }
    }

    public function admin_charts_q2_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_q2();
        } else {
            $this->admin_charts_q2();
        }
    }

    public function admin_charts_q3_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_q3();
        } else {
            $this->admin_charts_q3();
        }
    }

    public function admin_charts_q4_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_q4();
        } else {
            $this->admin_charts_q4();
        }
    }

    public function admin_charts_q5_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_q5();
        } else {
            $this->admin_charts_q5();
        }
    }

    public function admin_charts_q6_validation() {

        $this->form_validation->set_rules('endDate', 'End Date', 'trim|callback_compareDates');

        if ($this->form_validation->run() == FALSE) {
            $this->admin_charts_q6();
        } else {
            $this->admin_charts_q6();
        }
    }

    public function admin_charts_completed_topics() {

        $data ['ctopic1'] = $this->Admin_model->getCountTopic1();
        $data ['ctopic2'] = $this->Admin_model->getCountTopic2();
        $data ['ctopic3'] = $this->Admin_model->getCountTopic3();
        $data ['ctopic4'] = $this->Admin_model->getCountTopic4();
        $data ['ctopic5'] = $this->Admin_model->getCountTopic5();
        $data ['ctopic6'] = $this->Admin_model->getCountTopic6();
        $data ['ctopic7'] = $this->Admin_model->getCountTopic7();
        $data ['ctopic8'] = $this->Admin_model->getCountTopic8();
        $data ['ctopic9'] = $this->Admin_model->getCountTopic9();

        $data ['text1'] = "This graph illustrates the total number of times each topic has been completed by all students.";
        $data ['text2'] = "As shown on the graph, the number of times each topic has been completed is as follows:<br>";

       $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/charts/admin_charts_completed_topics', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_completed_topics_date() {

        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');

        $data ['ctopic1'] = $this->Admin_model->getCountTopic1_date($startDate, $endDate);
        $data ['ctopic2'] = $this->Admin_model->getCountTopic2_date($startDate, $endDate);
        $data ['ctopic3'] = $this->Admin_model->getCountTopic3_date($startDate, $endDate);
        $data ['ctopic4'] = $this->Admin_model->getCountTopic4_date($startDate, $endDate);
        $data ['ctopic5'] = $this->Admin_model->getCountTopic5_date($startDate, $endDate);
        $data ['ctopic6'] = $this->Admin_model->getCountTopic6_date($startDate, $endDate);
        $data ['ctopic7'] = $this->Admin_model->getCountTopic7_date($startDate, $endDate);
        $data ['ctopic8'] = $this->Admin_model->getCountTopic8_date($startDate, $endDate);
        $data ['ctopic9'] = $this->Admin_model->getCountTopic9_date($startDate, $endDate);

        $data ['text1'] = "This graph illustrates the total number of times each topic has been<br> completed by all students.";
        $data ['text2'] = "As shown on the graph, between <strong>$startDate</strong> and <strong>$endDate</strong>, the number of times each topic has been completed is as follows:<br>";

        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/charts/admin_charts_completed_topics', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_topics_per_student() {

        $studentName = $this->input->post('sname');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $graph = $this->input->post('graph');
        
        $data ['graphs'] = $this->Admin_model->getGraphs();

        $data ['goalsetting'] = $this->Admin_model->getUserCountGoalSetting($graph, $studentName, $startDate, $endDate);
        $data ['timemanagement'] = $this->Admin_model->getUserCountTimeManagement($graph, $studentName, $startDate, $endDate);
        $data ['studystrategies'] = $this->Admin_model->getUserCountStudyStrategies($graph, $studentName, $startDate, $endDate);
        $data ['concentration'] = $this->Admin_model->getUserCountConcentration($graph, $studentName, $startDate, $endDate);
        $data ['assignment'] = $this->Admin_model->getUserCountAssignment($graph, $studentName, $startDate, $endDate);
        $data ['reference'] = $this->Admin_model->getUserCountReference($graph, $studentName, $startDate, $endDate);
        $data ['notetaking'] = $this->Admin_model->getUserCountNotetaking($graph, $studentName, $startDate, $endDate);
        $data ['presentation'] = $this->Admin_model->getUserCountPresentation($graph, $studentName, $startDate, $endDate);
        $data ['tipsforexams'] = $this->Admin_model->getUserCountTipsForExams($graph, $studentName, $startDate, $endDate);
        
        $data ['topic1'] = $this->Admin_model->getCommentTopic1($studentName, $startDate, $endDate);
        $data ['topic2'] = $this->Admin_model->getCommentTopic2($studentName, $startDate, $endDate);
        $data ['topic3'] = $this->Admin_model->getCommentTopic3($studentName, $startDate, $endDate);
        $data ['topic4'] = $this->Admin_model->getCommentTopic4($studentName, $startDate, $endDate);
        $data ['topic5'] = $this->Admin_model->getCommentTopic5($studentName, $startDate, $endDate);
        $data ['topic6'] = $this->Admin_model->getCommentTopic6($studentName, $startDate, $endDate);
        $data ['topic7'] = $this->Admin_model->getCommentTopic7($studentName, $startDate, $endDate);
        $data ['topic8'] = $this->Admin_model->getCommentTopic8($studentName, $startDate, $endDate);
        $data ['topic9'] = $this->Admin_model->getCommentTopic9($studentName, $startDate, $endDate);
        
        $data ['text1'] = "This graph illustrates the total number of times each topic has been completed by a student.";
        $data ['text2'] = "As shown on the graph, between <strong>$startDate</strong> and <strong>$endDate</strong>, ";
        $data ['text3'] = " <strong>(s$studentName)</strong> completed:<br>";

        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/charts/admin_charts_topics_per_student', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_q1() {

        $studentName = $this->input->post('sname');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $topic = $this->input->post('stopic');
        $graph = $this->input->post('graph');

        $data ['topics'] = $this->Admin_model->getTopics();
        $data ['graphs'] = $this->Admin_model->getGraphs();

        $data ['yes'] = $this->Admin_model->getUserCountQ1_Yes($graph, $topic, $studentName, $startDate, $endDate);
        $data ['no'] = $this->Admin_model->getUserCountQ1_No($graph, $topic, $studentName, $startDate, $endDate);
        $data ['somehow'] = $this->Admin_model->getUserCountQ1_Somehow($graph, $topic, $studentName, $startDate, $endDate);

        $data ['text1'] = "This graph illustrates the number of responses of a student to a specific question.";
        $data ['text2'] = "As shown on the graph, between <strong>$startDate</strong> and <strong>$endDate</strong>, ";
        $data ['text3'] = " <strong>(s$studentName)</strong> gave the following responses as to whether the course was helpful or not:<br>";
        
        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/charts/feedback/admin_charts_q1', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_q2() {

        $studentName = $this->input->post('sname');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $topic = $this->input->post('stopic');
        $graph = $this->input->post('graph');

        $data ['topics'] = $this->Admin_model->getTopics();
        $data ['graphs'] = $this->Admin_model->getGraphs();

        $data ['rating1'] = $this->Admin_model->getUserCountQ2_1($graph, $topic, $studentName, $startDate, $endDate);
        $data ['rating2'] = $this->Admin_model->getUserCountQ2_2($graph, $topic, $studentName, $startDate, $endDate);
        $data ['rating3'] = $this->Admin_model->getUserCountQ2_3($graph, $topic, $studentName, $startDate, $endDate);
        $data ['rating4'] = $this->Admin_model->getUserCountQ2_4($graph, $topic, $studentName, $startDate, $endDate);
        $data ['rating5'] = $this->Admin_model->getUserCountQ2_5($graph, $topic, $studentName, $startDate, $endDate);
        
        $data ['text1'] = "This graph illustrates the number of responses of a student to a specific question.";
        $data ['text2'] = "As shown on the graph, between <strong>$startDate</strong> and <strong>$endDate</strong>, ";
        $data ['text3'] = " <strong>(s$studentName)</strong> gave the following ratings for the amount of material covered:<br>";

        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/charts/feedback/admin_charts_q2', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_q3() {

        $studentName = $this->input->post('sname');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $topic = $this->input->post('stopic');
        $graph = $this->input->post('graph');

        $data ['topics'] = $this->Admin_model->getTopics();
        $data ['graphs'] = $this->Admin_model->getGraphs();

        $data ['veryConsistent'] = $this->Admin_model->getUserCountQ3_VeryConsistent($graph, $topic, $studentName, $startDate, $endDate);
        $data ['consistent'] = $this->Admin_model->getUserCountQ3_Consistent($graph, $topic, $studentName, $startDate, $endDate);
        $data ['inconsistent'] = $this->Admin_model->getUserCountQ3_Inconsistent($graph, $topic, $studentName, $startDate, $endDate);

        $data ['text1'] = "This graph illustrates the number of responses of a student to a specific question.";
        $data ['text2'] = "As shown on the graph, between <strong>$startDate</strong> and <strong>$endDate</strong>, ";
        $data ['text3'] = " <strong>(s$studentName)</strong> gave the following responses regarding the consistency of the course content:<br>";

        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/charts/feedback/admin_charts_q3', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_q4() {

        $studentName = $this->input->post('sname');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $topic = $this->input->post('stopic');
        $graph = $this->input->post('graph');

        $data ['topics'] = $this->Admin_model->getTopics();
        $data ['graphs'] = $this->Admin_model->getGraphs();

        $data ['rating1'] = $this->Admin_model->getUserCountQ4_1($graph, $topic, $studentName, $startDate, $endDate);
        $data ['rating2'] = $this->Admin_model->getUserCountQ4_2($graph, $topic, $studentName, $startDate, $endDate);
        $data ['rating3'] = $this->Admin_model->getUserCountQ4_3($graph, $topic, $studentName, $startDate, $endDate);
        $data ['rating4'] = $this->Admin_model->getUserCountQ4_4($graph, $topic, $studentName, $startDate, $endDate);
        $data ['rating5'] = $this->Admin_model->getUserCountQ4_5($graph, $topic, $studentName, $startDate, $endDate);

        $data ['text1'] = "This graph illustrates the number of responses of a student to a specific question.";
        $data ['text2'] = "As shown on the graph, between <strong>$startDate</strong> and <strong>$endDate</strong>, ";
        $data ['text3'] = " <strong>(s$studentName)</strong> gave the following ratings regarding his/her confidence level for completing the knowledge or skill presented:<br>";

        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/charts/feedback/admin_charts_q4', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_q5() {

        $studentName = $this->input->post('sname');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $topic = $this->input->post('stopic');
        $graph = $this->input->post('graph');

        $data ['topics'] = $this->Admin_model->getTopics();
        $data ['graphs'] = $this->Admin_model->getGraphs();

        $data ['yes'] = $this->Admin_model->getUserCountQ5_Yes($graph, $topic, $studentName, $startDate, $endDate);
        $data ['no'] = $this->Admin_model->getUserCountQ5_No($graph, $topic, $studentName, $startDate, $endDate);
        $data ['somehow'] = $this->Admin_model->getUserCountQ5_Somehow($graph, $topic, $studentName, $startDate, $endDate);

        $data ['text1'] = "This graph illustrates the number of responses of a student to a specific question.";
        $data ['text2'] = "As shown on the graph, between <strong>$startDate</strong> and <strong>$endDate</strong>, ";
        $data ['text3'] = " <strong>(s$studentName)</strong> gave the following responses:<br>";

       $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/charts/feedback/admin_charts_q5', $data);
        $this->load->view('layouts/admin_footer');
    }

    public function admin_charts_q6() {

        $studentName = $this->input->post('sname');
        $startDate = $this->input->post('startDate');
        $endDate = $this->input->post('endDate');
        $topic = $this->input->post('stopic');
        $graph = $this->input->post('graph');

        $data ['topics'] = $this->Admin_model->getTopics();
        $data ['graphs'] = $this->Admin_model->getGraphs();

        $data ['yes'] = $this->Admin_model->getUserCountQ6_Yes($graph, $topic, $studentName, $startDate, $endDate);
        $data ['no'] = $this->Admin_model->getUserCountQ6_No($graph, $topic, $studentName, $startDate, $endDate);
        $data ['somehow'] = $this->Admin_model->getUserCountQ6_Somehow($graph, $topic, $studentName, $startDate, $endDate);

        $data ['text1'] = "This graph illustrates the number of responses of a student to a specific question.";
        $data ['text2'] = "As shown on the graph, between <strong>$startDate</strong> and <strong>$endDate</strong>, ";
        $data ['text3'] = " <strong>(s$studentName)</strong> gave the following responses:<br>";
        
        $data["admin_details"] = $this->Admin_model->get_user_admin();
        $this->load->view('layouts/admin_header',$data);
        $this->load->view('admin/charts/feedback/admin_charts_q6', $data);
        $this->load->view('layouts/admin_footer');
    }

}
