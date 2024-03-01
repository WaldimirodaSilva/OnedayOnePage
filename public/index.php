<?php
session_start();
require_once('./../app/config.php');
require_once('./../app/autoload.php');
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=URL?>/public/css/bootstrap.min.css">
	<title><?=APP_NOME?></title>
            <?php  $rot=new Rota();?>
  