<?php  
    
   class home extends CI_Controller  
   {  
      public function __construct() {

         parent::__construct();
         $this->load->model('product_model');
           
      } 

      public function index()
      {
         $data['h'] = $this->product_model->getAll();  
         //return the data in view  
         $this->load->view('index', $data);  
      }
   }  
?>  