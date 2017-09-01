<?php   require_once('cabecalho.php'); 
        require_once('banco-entidade.php');
        require_once('formulario-entidade.php');
        require_once('util/logica-formulario.php');

    $cnpj = $_POST['cnpj']; 
    if ($cnpj == $_POST['cnpj']) {
        if(validar_cnpj($cnpj)){
            $result = consultaParceiro($conexao, $cnpj);
            $_SESSION['success'] = "Aceitou o CNPJ";
            var_dump($result);
        } else {
            $_SESSION['danger'] = "CNPJ inválido.";     
        }
    }
        require_once('rodape.php');
?>

