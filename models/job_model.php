<?php
class job_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_job($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('applicationforjob');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('applicationforjob', array('id' => $id));
        return $query->row_array();
    }
    
    
    public function set_job($id = 0)
    {
        $data = array(
            'name' => $this->input->post('firstname'),
            'surname' => $this->input->post('surname'),
            'gender' => $this->input->post('gender'),
            'birthday' => $this->input->post('birthday'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'job' => $this->input->post('job'),
            'description' => $this->input->post('description'),
            'uploaded_at' => date('Y-m-d H:i:s')
        );
            
        if ($id == 0) {
            return $this->db->insert('applicationforjob', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('applicationforjob', $data);
        }
    }
    
    public function delete_job($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('applicationforjob');
    }    
    
}
