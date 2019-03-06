<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class information extends CI_Controller {
   public function __construct()
   {
   parent::__construct(); 
   $this->load->model('contact_model');
   $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
   }
   public function about()
   {
       $this->load->view('information/about');
}
public function delivery()
   {
       $this->load->view('information/delivery');
}
public function orders_and_returns()
   {
       $this->load->view('information/orders_and_returns');
}
public function news()
   {
       $this->load->view('information/news');
} 

public function contact()
   {
       $this->load->view('information/contact');
} 
function add(){
    if($this->input->post('commentSubmit')){
        
        //Prepare array of user data
        $userData = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('mailas'),
            'company' => $this->input->post('companyname'),
            'subject' => $this->input->post('subject')
        );
        
        //Pass user data to model
        $insertUserData = $this->contact_model->insert($userData);
        if ($id == 0) {
            return $this->db->insert('contact', $insertUserData);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('contact', $insertUserData);
        }
    
        //Storing insertion status message.
        if($insertUserData){
            $this->session->set_flashdata('success_msg', 'User data have been added successfully.');
        }else{
            $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
        }
    }
    //Form for adding user data
   /* $this->load->view('templates/page_header');
    $this->load->view('templates/page_header_bottom');
    $this->load->view('information/contact');
    $this->load->view('templates/page_footer'); */
}


}