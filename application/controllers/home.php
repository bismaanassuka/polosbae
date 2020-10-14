<?php  
    
   class home extends CI_Controller  
   {  
      var $g_var;
      public function __construct() {

         parent::__construct();
         
         $this->load->model('product_model');
           
      } 

      public function index()
      {
         // $g_var = $this->g_var;
         $data['h'] = $this->product_model->getAll(); 
         $data['something'] = "hello";
         //return the data in view  
         $this->load->view('index', $data);     
         // $something = $this->input->post('something');
      }

      public function indexx()
      {
         $data['h'] = $this->product_model->getAll();  
         //return the data in view  
         $this->load->view('menu-baru', $data);    
      }
   }  
?>  