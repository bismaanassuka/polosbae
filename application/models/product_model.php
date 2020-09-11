<?php 
// defined('BASEPATH') or exit('No direct script access allowed');

// class Product_model extends CI_Model
// {
//     private $_table = "data_ty";
//     public $Id;

//     public $Name;
//     public $Processor;
//     public $Gpu;
//     public $Display;
//     public $Memory;
//     public $Storage;
//     public $Weight;
//     public $Dimension;
//     public $Battery;

//     public function rules()
//     {
//         return [
//             [
//                 'field' => 'Name',
//                 'label' => 'Name',
//                 'rules' => 'required'
//             ]
//             ];
           
//     }

//     public function getAll()
//     {
//         return $this->db->get($this->_table)->result();
//     }

//     public function getById($id)
//     {
//         return $this->db->get_where($this->_table, ["Id" => $id])->row();
//     }

//     // public function save()
//     // {
//     //     $post = $this->input->post();
//     //     $this->product_id = uniqid();
//     //     $this->name = $post["name"];
//     //     $this->price = $post["price"];
//     //     $this->description = $post["description"];
//     //     return $this->db->insert($this->_table, $this);
//     // }

//     // public function update()
//     // {
//     //     $post = $this->input->post();
//     //     $this->product_id = $post["id"];
//     //     $this->name = $post["name"];
//     //     $this->price = $post["price"];
//     //     $this->description = $post["description"];
//     //     return $this->db->update($this->_table, $this, array('product_id' => $post['id']));
//     // }

//     // public function delete($id)
//     // {
//     //     return $this->db->delete($this->_table, array("product_id" => $id));
//     // } -->
// }?> 
 <?php  
   class product_model extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the select function  
      public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('data_ty');  
         return $query;  
      }  
   }  
?>