<?php

 Class  Sessao
 {
 	 public static function mensagem($nome,$text=null,$class=null)
 	 {
 	 	  if (!empty($nome)) 
 	 	  {
 	 	      if (!empty($text) && empty($_SESSION[$nome]))
 	 	       {
 	 	       	 if (!empty($_SESSION[$nome])) {
 	 	       	    unset($_SESSION[$nome]);
 	 	       	 }
 	 	      	 $_SESSION[$nome]=$text;
 	 	      	 $_SESSION[$nome.'classe']=$class;
 	 	       }elseif(!empty($_SESSION[$nome])&& empty($text))
 	 	         {
                   $class=!empty( $_SESSION[$nome.'classe'])? $_SESSION[$nome.'classe']:'alert  alert-success';
                   echo '<div class="'.$class.'">'.$_SESSION[$nome].'</div>';
                    unset( $_SESSION[$nome]);
                    unset( $_SESSION[$nome.'classe']);
 	 	         }
 	 	  }
 	 }
 }


?>