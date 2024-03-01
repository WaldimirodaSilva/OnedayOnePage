<?php
    Class Usuario
      {
          private $db;
          function __construct()
          {
              $this->db=new Database();
          }
          public function validarEmail($email)
          {

              $result=$this->db->select("SELECT*FROM usuarios WHERE email=:EMAIL",array(':EMAIL'=>$email));
              if (count($result)>0){
                  return true;
                }else{
                      return false;
                }
          }
          public function armazenar($dados)
          {
              var_dump($dados);
              $nome=$dados['nome'];
              $senha=$dados['senha'];
              $email=$dados['email'];
           $this->db->quiry("INSERT INTO usuarios (nome,email,senha)VALUES('$nome','$email','$senha')");
            return true;
            }
            public function validarLogin($email,$senha)
          {
              //echo $senha;
              $result=$this->db->select("SELECT*FROM usuarios WHERE email=:EMAIL",array(':EMAIL'=>$email));
               if (count($result)>0) 
                   {

                        $row=$result[0];
                       $db_senha=$row['senha'];
                          if(password_verify($senha,$db_senha))
                          {
                              
                              return $result[0];
                          }else
                            {
                               return false;
                            }

                   }else{
                          return false;
                 }
                 

          }
      }
?>