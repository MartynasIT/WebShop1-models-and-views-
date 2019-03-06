<?php

class Upload extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('job_model');
            $this->load->helper(array('form', 'url'));
            $this->load->library(array('session', 'form_validation'));
        }

        public function index()
        {
                $this->load->view('add', array('error' => ' ' ));
        }

        public function do_upload()
        {
                if($_FILES['userfile']['name']!=""){
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 0;
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('add', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $file_name = $this->upload->file_name;
                       //$this->load->view('upload_success', $data);
                }
        }
}
?>