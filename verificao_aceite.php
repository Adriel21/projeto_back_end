<?php

use Projeto\Aceite;
use Projeto\Usuario;
require_once 'vendor/autoload.php';
$usuario = new Usuario;
$usuario->setEmail($_GET['email']);
$dados = $usuario->listarAceite();


date_default_timezone_set('America/Sao_Paulo');    
$DateAndTime = date('y-m-d h:i:s a', time()); 

$aceite = new Aceite;
$aceite->setConfirmacao('Aceite confirmado');
$aceite->setPeriodo($DateAndTime);
$aceite->setUsuarioId($dados['id']);

$aceite->aceitar();
header('location:login.php?cadastro_efetuado');