<?php
class Product_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllproducts()
    {

        $query=$this->db->get('produktai');
        return $query->result();

    }

    public function getOneProduct($id = FALSE) {
        if ($id === FALSE) {
            $query = $this->db->get('products');
            return $query->result_array();
        }
        $query = $this->db->get_where('products', array('product_id' => $id));
        return $query->row_array();
    }

    public function getCart()
    {

        $this->db->from('cart');
        $this->db->where('cust_id',session_id());
        $query = $this->db->get();
        return $query->result();

    }

    public function gettotal()
    {

        $this->db->from('cart');
        $this->db->where('cust_id',session_id());
        $query = $this->db->get();
         $total = 0;
        foreach ($query->result() as $row)
        {
            $total =  $total + floatval($row->price )*$row->qty;

        }

         return $total;
    }



public function getpid ()
{

$id = session_id();
    //$this->db->from('cart');
    //$this->db->where('cust_id',session_id());
    $query = $this->db->query('SELECT p_id FROM cart WHERE cust_id = "'.$id.'"');
    return $query->result();


}

}