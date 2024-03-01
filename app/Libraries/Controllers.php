<?php
 Class Controllers
  {
       public function model($model)
       {
           require_once('../app/Model/'.$model.'.php');
           return new $model;
       }
       public function view($view,$dados=[])
       {
           $arquivo = ('../app/Views/'.$view.'.php');
            if(file_exists($arquivo))
            {
                require_once($arquivo);
            }else{
                die('Arquivo de views não existe');
            }
       }
  }