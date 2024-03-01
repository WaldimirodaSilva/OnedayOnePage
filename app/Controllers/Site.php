<?php
      Class Site extends Controllers
	{

            public function index()
         {
            $this->view('site/home'); 
         }
             public function sobre()
         {
             $this->view('site/sobre');     
         }
         
      }
?>