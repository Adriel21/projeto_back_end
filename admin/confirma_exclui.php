<?php
ob_start();

use Projeto\ControleDeAcesso;
use Projeto\Usuario;
require_once '../vendor/autoload.php';
$usuario = new Usuario;
$sessao = new ControleDeAcesso;
$usuario->setId($_SESSION['id']);

$dados = $usuario->listarUm();


$sessao->confirmaExcluir($dados['id'], 'confirma');
header('location:cadastro_exclui.php');

ob_flush(); 