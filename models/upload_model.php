<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class upload_model extends CI_Model{
    function __construct() {
        $this->tableName = 'applicationforjob';
        $this->primaryKey = 'id';
    }
    
    public function insert($data = array()){
        if(!array_key_exists("created",$data)){
            $data['created'] = date("Y-m-d H:i:s");
        }

        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;    
        }
    }
}