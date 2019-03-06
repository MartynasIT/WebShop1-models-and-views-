<?php defined('BASEPATH') OR exit('No direct script access allowed');
class users extends CI_Controller
{
    function  __construct() {
        parent::__construct();
        $this->load->model('upload_model');
    //    $this->load->library('lib_log');
    }
  
    function add(){
        if($this->input->post('userSubmit')){
            
            //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads';
                $config['allowed_types'] = 'pdf';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
            
            //Prepare array of user data
            $userData = array(
                'firstname' => $this->input->post('name'),
                'surname' => $this->input->post('surname'),
                'gender' => $this->input->post('gender'),
                'bdate' => $this->input->post('bdate'),
                'email' => $this->input->post('mail'),
                'telno' => $this->input->post('telno'),
                'job' => $this->input->post('job'),
                'aboutme' => $this->input->post('aboutme'),
                'picture' => $picture
            );
            
            //Pass user data to model
            $insertUserData = $this->upload_model->insert($userData);
            
            //Storing insertion status message.
            if($insertUserData){
                $this->session->set_flashdata('success_msg', 'User data have been added successfully.');
            }else{
                $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
            }
        }
        //Form for adding user data
        $this->load->view('templates/page_header');
        $this->load->view('templates/page_header_bottom');
        $this->load->view('users/add');
        $this->load->view('templates/page_footer'); 
    }
}