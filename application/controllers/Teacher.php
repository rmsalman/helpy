<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Teacher extends CI_Controller {
    /**
     * Class Constructor
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('settings_model');


    }


    public function index(){

        if($this->session->userdata('role_slug') == 'student')
        {
            redirect('student/profile');
        }
        elseif ($this->session->userdata('role_slug') == 'admin' || $this->session->userdata('role_slug') == 'provider')
        {
            redirect('/backend');
        }

        $data = array();
        $data['title'] = 'Register';
        $data['base_url'] = $this->config->item('base_url');
        $data['company_name'] = $this->settings_model->get_setting('company_name');
        $this->load->view('includes/header', $data);
        $this->load->view('teacher/register', $data);
        $this->load->view('includes/footer', $data);
    }




}

