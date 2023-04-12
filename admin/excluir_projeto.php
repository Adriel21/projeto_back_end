<?php
ob_start();

require_once '../vendor/autoload.php';

use Projeto\ControleDeAcesso;
use Projeto\Projeto;

$sessao = new ControleDeAcesso;

$sessao->verificaAcesso();

$projeto = new Projeto;


$projeto->setId($_GET["id"]);

$projeto->excluirProjeto();

header('location:dashboard_cliente.php');
ob_flush(); 