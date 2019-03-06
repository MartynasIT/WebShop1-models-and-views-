<?php /*
class information extends CI_Controller
{
    function  __construct() {
        parent::__construct();
        $this->load->model('contact_model');
    }
  
    function add(){
        if($this->input->post('commentSubmit')){
            
            //Prepare array of user data
            $userData = array(
                'firstname' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'company' => $this->input->post('companyname'),
                'subject' => $this->input->post('subject')
                
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
        $this->load->view('information/contact');
        $this->load->view('templates/page_footer'); 
    }
}
            //set to_email id to which you want to receive mails
       /*     $to_email = 'user@gmail.com';

            //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'user@gmail.com';
            $config['smtp_pass'] = 'password';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            //$this->load->library('email', $config);
            $this->email->initialize($config);                        

            //send mail
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject($subject);
            $this->email->message($message);
            if ($this->email->send())
            {
                // mail sent
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Your mail has been sent successfully!</div>');
                redirect('contact');
            }
            else
            {
                //error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
                redirect('contact');
            }
        }
    }
    
    //custom validation function to accept only alphabets and space input
    function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
} */
?>