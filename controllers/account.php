<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class account extends CI_Controller {
   
public function __construct()
   {
   parent::__construct();
   }

   public function login()
   {
       $this->load->view('account/login');
}

public function register()
   {
       $this->load->view('account/register');
}

public function myaccount()
{
    if (!$this->session->userdata('is_logged_in')) {
        redirect(site_url('user/login'));
    } else {
        redirect(site_url('news'));
    }

}
}
