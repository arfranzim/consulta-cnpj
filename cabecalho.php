<!doctype html>
<html>
<head>
	<title>AVM - Associado Nosso Maior Patrimônio</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/loja.css">
	<meta name="viewport"  content="width=device-width, initial-scale=1">	
</head> 

<body>
	<div class="navbar navbar navbar-fixed-top">
		<div class="container">	
    		<div class="navbar-header">
                <a href="index.php" class="navbar-brand">
                    <img alt="Brand" src="img/avm_maior.png" height="120" width="120"/> 
                </a>
            </div>

            <div class="container">	
				<div class="navbar-header">
					<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
		           		<span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		        	</button>
		    		
				</div>
			</div>
		</div>

		<div class="container">		
			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li> <a href="index.php">HOME</a> </li>
					<li> <a href="#">Parceiros</a> </li>
					<li> <a href="#">Adiciona Parceiro</a> </li>
					<li> <a href="#">Buscar</a> </li>
					<li> <a href="#">Indicadores</a> </li>
					<li> <a href="#">Enviar e-mail em massa</a> </li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		
		<div class="principal">
			<script src="js/jquery.js"></script>
			<?php 
				error_reporting(E_ALL ^ E_NOTICE);
				require_once('mostra-alerta.php'); 
				mostraAlerta('success');
			    mostraAlerta('danger');
			?>
