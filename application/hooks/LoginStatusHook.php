<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginStatusHook
{
    public function check_login_status()
    {
        $CI = &get_instance();
        $CI->load->library('session');

        $is_logged_in = $CI->session->userdata('id_customer') ? true : false;
        if ($is_logged_in) {
            $customer_data = $CI->session->userdata('customer_data');
            $CI->load->vars('customer_data', $customer_data);
        }
        $CI->load->vars('is_logged_in', $is_logged_in);
    }
}
