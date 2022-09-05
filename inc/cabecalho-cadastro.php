<?php
$pagina = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto - back end</title>

    <?php 
switch($pagina){
    case 'cadastroDois.php':
    case 'cadastro.php':
    case 'loginDois.php':
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">

<?php
    break;

    case 'dashboard-freela.php':
    // case 'dashboard-cliente.php':
    // case 'noticia-atualiza.php':
?>
<link rel="stylesheet" href="css/dashboard-freela.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">


<?php
    break;
}
?>

    <!-- Icons Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    

</head>