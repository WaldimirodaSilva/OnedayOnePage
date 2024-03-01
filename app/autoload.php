<?php

spl_autoload_register(
	       function($nameClass)
		{
           $dir=['Libraries','Helpers'];
           foreach ($dir as $direct) {
           	$file=__DIR__.DIRECTORY_SEPARATOR.$direct.DIRECTORY_SEPARATOR.$nameClass.'.php';
           	 if(file_exists($file))
           	 {
               require_once($file);
           	 }
           }
		}

);




?>