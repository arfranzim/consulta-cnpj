<?php 
	require_once('conecta.php');	

	function consultaParceiro($conexao, $cnpj){
		$query = "select * from entidade where cnpj = '{$cnpj}'";
		$parceiros = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($parceiros);		
	}

 ?>