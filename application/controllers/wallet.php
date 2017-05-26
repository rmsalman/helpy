<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class wallet extends CI_Controller
{
    /**
     * Class Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('settings_model');

        $this->load->model('wallet_model');
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
        $data['messages'] = $this->wallet_model->get_mes();
        $data['cur'] = $this->wallet_model->get_cur();
        $data['cur_rec'] = $this->wallet_model->cur_rec();
        $data['cur_rec_total'] = $this->wallet_model->cur_rec_total();

        $data['messages_sent'] = $this->wallet_model->sent();
        $this->load->view('includes/header', $data);
        $this->load->view('wallet/index', $data);
        $this->load->view('includes/footer', $data);

    }

    public function transfer($id = "") {
        $data = array();
        $data['base_url'] = $this->config->item('base_url');
        $data['company_name'] = $this->settings_model->get_setting('company_name');
        $this->load->view('includes/header', $data);



        if($id == null){
            redirect('messages');
        }else {
            $data['profile'] = $this->student_model->profile($id);
            $this->form_validation->set_rules('message', 'Type Message', 'required');
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('wallet/to', $data);
            }else {
                $data['cur'] = $this->wallet_model->get_cur();
                $data['cur_rec_total'] = $this->wallet_model->cur_rec_total();
                $total = $data['cur_rec_total']->currency - $data['cur']->currency;
                if($total > $this->input->post('message')){
                    if( $this->wallet_model->send_now($this->session->userdata('user_id'), $id)){
                        $this->session->set_flashdata('error', 'Payment Sent Successfully');
                        redirect('wallet');
                    }
                }
                else
                {
                    $this->session->set_flashdata('error', 'Payment could not be made due to Unsufficient Balance');
                    redirect('wallet');
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


        $data['all_wallet'] = $this->wallet_model->all_wallet($id);

        $this->load->view('includes/header', $data);
        $this->load->view('wallet/all', $data);
        $this->load->view('includes/footer', $data);

    }

    public function success($id = null)
    {   
        $data = array();
        $data = $_POST;

       if($this->wallet_model->add_success($data)) {
            redirect('wallet/check');
       }



    }


    public function check($id = null)
    {   


        $data = array();
        $data['title'] = 'Sign In';
        $data['base_url'] = $this->config->item('base_url');
        $data['company_name'] = $this->settings_model->get_setting('company_name');



if($id == null){
        $id =  $this->session->userdata('user_id');
}

        $data['all_wallet'] = $this->wallet_model->all_wallet($id);

        $data['cur_rec_total'] = $this->wallet_model->cur_rec_total($id);

        if($data['cur_rec_total'] > 20) {

            $this->session->set_flashdata('login_failed', 'Sorry you do not have enough Currency in your wallet');
            $this->load->view('includes/header', $data);
            $this->load->view('wallet/pay', $data);
            $this->load->view('includes/footer', $data);

        }else {
            // echo $data['cur_rec_total'] -> currency;
            redirect('appointments');

        }
    }
}








