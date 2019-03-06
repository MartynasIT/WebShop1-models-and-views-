<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categories extends CI_Controller {
   public function __construct()
   {
   parent::__construct();
   }
   public function mobilephone()
   {
       $this->load->view('categories/mobilephone');
}
public function desktoppc()
   {
       $this->load->view('categories/desktoppc');
}
public function software()
   {
       $this->load->view('categories/software');
}
public function laptoppc()
   {
       $this->load->view('categories/laptoppc');
} 
public function tv()
   {
       $this->load->view('categories/tv');
} 
public function accessories()
   {
       $this->load->view('categories/accessories');
}  
public function games()
   {
       $this->load->view('categories/games');
}
public function allproducts()
   {
       $this->load->view('categories/allproducts/all');
}
}
