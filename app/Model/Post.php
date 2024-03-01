<?php
 
 Class Post
 {
          private $db;
          function __construct()
          {
              $this->db=new Database();
          }
         
          public function armazenar($dados)
          {
              
             
          	  $user=$_SESSION['usuario_id'];
              $titulo=$dados['titulo'];
              $texto=$dados['texto'];
         $this->db->quiry("INSERT INTO post (id_user,titulo,texto)VALUES('$user','$titulo','$texto')");
              return true;
            }
          public function lerPost()
          {
            $result=$this->db->select("SELECT*,post.id as postID,post.criado_em as postData,usuarios.id as userID FROM post INNER JOIN usuarios ON post.id_user=usuarios.id ORDER BY post.id DESC");
               return $result;
          }
          public function load($id)
          {

             $result=$this->db->select("SELECT*,post.id as postID,post.criado_em as postData,usuarios.id as userID FROM post  INNER JOIN usuarios ON post.id_user=usuarios.id WHERE post.id=:ID",
              array("ID"=>$id
              ));
                    return $result;
          }
          public function atualizar($dados)
          {
            $this->db->quiry("UPDATE post SET titulo=:TITLE,texto=:TEXTO where id=:ID",array('TITLE'=>$dados['titulo'],'TEXTO'=>$dados['texto'],'ID'=>$dados['id']));
            return true;
          }
          public function apagar($id)
          {
            $this->db->quiry("DELETE FROM  post WHERE id=:ID",array('ID'=>$id));
            return true;
          }
      }

?>