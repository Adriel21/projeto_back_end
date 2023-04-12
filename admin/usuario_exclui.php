<?php
ob_start();

use Projeto\ControleDeAcesso;
use Projeto\Usuario;

require_once '../vendor/autoload.php';
$sessao = new ControleDeAcesso;





$usuario = new Usuario;
$usuario->setId($_SESSION['id']);
$usuario->excluirCadastro();



$sessao->logout();




ob_flush();
