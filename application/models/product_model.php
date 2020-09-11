<?php
class product_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor  
        parent::__construct();
        $this->load->database();
    }
    //we will use the select function  
    public function getAll()
    {
        //data is retrive from this query  
        $query = $this->db->get('data_ty')->result();
        return $query;
    }
}
