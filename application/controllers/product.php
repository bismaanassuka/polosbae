<?php  
    
   class product extends CI_Controller  
   {  
      public function __construct() {

         parent::__construct();
         $this->load->model('product_model');
           
      }

      public function search()
      {
         $keyword = $this->input->post('keyword');
         $data['h'] = $this->product_model->search($keyword);
         $this->load->view('index', $data);  
      }
     
   }  
?>  