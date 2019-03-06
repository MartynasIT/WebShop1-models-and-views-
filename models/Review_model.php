<?php
class Review_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_contact($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('contact');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('contact', array('id' => $id));
        return $query->row_array();
    }
    

    
    public function set_contact($id = 0)
    {
        $data = array(
            'name' => $this->input->post('name'),
            'emailas' => $this->input->post('email'),
            'companyname' => $this->input->post('companyname'),
            'subject' => $this->input->post('subject'),
            'updated_at' => date('Y-m-d H:i:s')
        );
            
        if ($id == 0) {
            return $this->db->insert('contact', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('contact', $data);
        }
    }
    
    public function delete_contact($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('contact');
    }    
    
}
