<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('logout'))
{

    function logout(){
        // Unset user data
        $ci =& get_instance();
        $ci->session->unset_userdata('logged_in');
        $ci->session->unset_userdata('user_id');
        $ci->session->unset_userdata('username');

        // Set message
        $ci->session->set_flashdata('user_loggedout', 'You are now logged out');

        redirect('student/login');
    }
}


?>