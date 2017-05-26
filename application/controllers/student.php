<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Student extends CI_Controller {
    /**
     * Class Constructor
     */
    public function __construct() {
        parent::__construct();
        $this->load->model('settings_model');


    }


    public function checkUser(){

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
        $data['title'] = 'Sign In';
        $data['base_url'] = $this->config->item('base_url');
        $data['company_name'] = $this->settings_model->get_setting('company_name');
        $this->load->view('includes/header', $data);
        $this->load->view('student/login', $data);
        $this->load->view('includes/footer', $data);
    }


    public function reg(){
        if(empty($this->session->userdata('useremail')))
        {
            redirect('student/login');
        }
        $data['title'] = 'Sign In';
        $data['base_url'] = $this->config->item('base_url');
        $data['company_name'] = $this->settings_model->get_setting('company_name');
        $this->load->view('includes/header', $data);
        $this->load->view('student/reg-provider', $data);
        $this->load->view('includes/footer', $data);
    }

    // Log in user
    public function profile($id = null){

        $data = array();
        $data['title'] = 'Sign In';
        $data['base_url'] = $this->config->item('base_url');
        $data['company_name'] = $this->settings_model->get_setting('company_name');



        if(empty($id)) {
           $id = $this->session->userdata('user_id');
        }
        else {
                $id = $id;
                $data['pager_id'] = array( 'id' => $id );
        }


        if($id){
            
            if(!empty($this->student_model->profile($id))){
                $data['profile'] = $this->student_model->profile($id);
                $data['appointments'] = $this->student_model->appointments($id);
                $id_by = $this->session->userdata('user_id');

                if($this->input->post('rating_value')) {
                        $this->form_validation->set_rules('rating_value', 'Rating', 'required');
                        if ($this->form_validation->run()) { 
                               if($this->student_model->rating_add($id, $id_by, $this->input->post('rating_value'))){
                                    redirect('student/profile/'.$id);
                               }
                        }
                }


                $data['rating_num'] = $this->student_model->rating_num($id);
                $data['rating'] = $this->student_model->rating($id);
                $this->load->view('includes/header', $data);
                $this->load->view('student/profile', $data);
                $this->load->view('includes/footer', $data);
            }else {
                $this->load->helper('student_helper');
                return logout();
            }
        }else {
            redirect('student/login');
        }

    }


    public function update($id = '')
    {


        $data = array();
        $data['title'] = 'Update Profile';
        $data['base_url'] = $this->config->item('base_url');
        $data['company_name'] = $this->settings_model->get_setting('company_name');


        if(empty($this->session->userdata('useremail')))
        {
            redirect('student/login');
        }

if($id == ''){
    $id = $this->session->userdata('user_id');
}

        $data['profile'] = $this->student_model->profile($id);

        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('zipcode', 'Zipcode', 'required');


        $this->form_validation->set_rules('email', 'Email', 'required');

        if($data['profile']-> email !== $this->input->post('email')){
            $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
        }

        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('includes/header', $data);
                $this->load->view('student/update', $data);
            $this->load->view('includes/footer', $data);
        } else {
            // Encrypt password
            $enc_password = md5($this->input->post('password'));

             if($this->student_model->updated($id, $enc_password)){

                 $this->session->set_flashdata('user_registered', 'Profile Updated');

            redirect('student/profile');
             }
        }

    }



    public function register()
    {
        if(!empty($this->session->userdata('useremail')))
        {
            redirect('student/profile');
        }
        $data = array();
        $data['title'] = 'Sign Up';
        $data['base_url'] = $this->config->item('base_url');
        $data['company_name'] = $this->settings_model->get_setting('company_name');


        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone_number', 'Phone Number', 'required');
        $this->form_validation->set_rules('zipcode', 'Zipcode', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('includes/header', $data);
            $this->load->view('student/register', $data);
            $this->load->view('includes/footer', $data);
        } else {
            // Encrypt password
            $enc_password = md5($this->input->post('password'));

            $user_id = $this->student_model->register($enc_password);

            // Set message
            $this->session->set_flashdata('user_registered', 'You are now registered');

            if ($user_id) {
                // Create session
                $user_data = array(
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'useremail' => $this->input->post('email'),
                    'address' => $this->input->post('address'),
                    'zip_code' => $this->input->post('zipcode'),
                    'phone_number' => $this->input->post('phone_number'),
                    'notes' => $this->input->post('notes'),
                    'user_id' => $user_id,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);

                redirect('student/profile');
            }
        }


    }


    // Log in user
    public function login(){

        $data = array();
        $data['title'] = 'Sign In';
        $data['base_url'] = $this->config->item('base_url');
        $data['company_name'] = $this->settings_model->get_setting('company_name');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('includes/header', $data);
            $this->load->view('student/login', $data);
            $this->load->view('includes/footer', $data);
        } else {

            // Get username
            $username = $this->input->post('username');
            // Get and encrypt the password
            $password = md5($this->input->post('password'));

            // Login user
            $user_id = $this->student_model->login($username, $password);


            if($user_id){
                // Create session
                if($user_id->user_status == 0) {
                    $this->session->set_flashdata('login_failed', 'Sorry your Account has been Blocked!');
                    redirect('student/login');
                }


if($user_id->id_roles == 3){
                $user_data = array(
                    'user_id' => $user_id->id,
                    'useremail' => $username,
                    'phone_number' => $user_id->phone_number,
                    'first_name' => $user_id->first_name,
                    'last_name' => $user_id->last_name,
                    'address' => $user_id->address,
                    'zip_code' => $user_id->zip_code,
                    'city' => $user_id->city,
                    'id_roles' => '3',
                    'role_slug' => 'student',
                    'logged_in' => true
                );
                $this->session->set_userdata($user_data);
                // Set message
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');
                redirect('student/profile');
}else {
    redirect('/');
}
            } else {
                // Set message
                $this->session->set_flashdata('login_failed', 'Login is invalid');
                redirect('student/login');
            }
        }
    }

    // Log user out
    public function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('useremail');
        $this->session->unset_userdata('role_slug');
        $this->session->unset_userdata('id_roles');


        // Set message
        $this->session->set_flashdata('user_loggedout', 'You are now logged out');
        redirect('student/login');
    }





    // Check if username exists
    public function check_username_exists($username){
        $this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
        if($this->student_model->check_username_exists($username)){
            return true;
        } else {
            return false;
        }
    }

    // Check if email exists
    public function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
        if($this->student_model->check_email_exists($email)){
            return true;
        } else {
            return false;
        }
    }

    
       



}

