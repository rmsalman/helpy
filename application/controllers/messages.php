<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class messages extends CI_Controller
{
    /**
     * Class Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('settings_model');
        if($this->session->userdata('user_id')){
        }else {
            redirect('student');
        }
    }


    public function index()
    {
        $data = array();
        $data['title'] = 'Sign In';
        $data['base_url'] = $this->config->item('base_url');
        $data['company_name'] = $this->settings_model->get_setting('company_name');
        $this->load->model('messagingz_model');
        $data['messages'] = $this->messagingz_model->get_mes();
        $data['messages_sent'] = $this->messagingz_model->sent();
        $this->load->view('includes/header', $data);
        $this->load->view('messages/index', $data);
        $this->load->view('includes/footer', $data);
    }

    public function send($id = "") {
        $data = array();
        $data['base_url'] = $this->config->item('base_url');
        $data['company_name'] = $this->settings_model->get_setting('company_name');
        $this->load->model('messagingz_model');
        $this->load->view('includes/header', $data);

        if($id == null){
            redirect('messages');
        }else {
            $data['profile'] = $this->student_model->profile($id);
            $this->form_validation->set_rules('message', 'Type Message', 'required');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('messages/to', $data);
            }else {
                 if( $this->messagingz_model->send_now($this->session->userdata('user_id'), $id)){
                    redirect('messages');
                 }
            }
        }
        $this->load->view('includes/footer', $data);
    }


    public function all($id = null)
    {
        $data = array();
        $data['base_url'] = $this->config->item('base_url');
        $data['company_name'] = $this->settings_model->get_setting('company_name');

        $this->load->model('messagingz_model');

        $data['messages_sent'] = $this->messagingz_model->all_sent($id);
        $data['messages'] = $this->messagingz_model->all_rec($id);

        $this->load->view('includes/header', $data);
        $this->load->view('messages/all', $data);
        $this->load->view('includes/footer', $data);

    }


}








