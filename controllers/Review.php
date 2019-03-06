<?php
class contact extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('review_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }
 
    public function index()
    {
        $this->load->view('index');;
    } 
    
    public function contact()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required|alpha|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('emailas', 'Email', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('companyname', 'Company name', 'trim|required|alpha|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|max_length[1000]');
        
        
        if ($this->form_validation->run() === FALSE)
        {            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/page_header_bottom');
            $this->load->view('information/contact');
            $this->load->view('templates/page_footer');
 
        }
        else
        { 
            if ($this->review_model->set_contact())
            {                             
                $this->session->set_flashdata('msg_success','Registration Successful!');
                redirect('information/contact');            
            }
            else
            {                
                $this->session->set_flashdata('msg_error','Error! Please try again later.');
                redirect('information/contact');
            }
        }
    }
}