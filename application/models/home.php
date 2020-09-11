<?php  
   class home extends CI_Controller  
   {  
      public function index()  
      {  
         //load the database  
         $this->load->database();  
         //load the model  
         $this->load->model('product_model');  
         //load the method of model  
         $data['h']=$this->select->product_model();  
         //return the data in view  
         $this->load->view('index', $data);  
      }  
   }  
?>  