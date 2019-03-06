<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class products extends CI_Controller {
   public function __construct()
   {
   parent::__construct(); 
 
   }
   public function assettocorsa()
   {
       $this->load->view('/products/assettocorsa');
}
public function dre()
   {
       $this->load->view('/products/dre');
}

}