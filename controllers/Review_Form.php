<?php

class Review_Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('/information/contact');
                }
                else
                {
                        $this->load->view('/information/contact');
                }
        } 
}