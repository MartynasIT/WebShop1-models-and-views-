<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class questions extends CI_Controller {
   public function __construct()
   {
   parent::__construct();
   }
   public function faq()
   {
       $this->load->view('questions/faq');
}
public function help()
   {
       $this->load->view('questions/help');
}
public function privacypolicy()
   {
       $this->load->view('questions/privacypolicy');
}
public function trackmyorder()
   {
       $this->load->view('questions/trackmyorder');
}  
}
