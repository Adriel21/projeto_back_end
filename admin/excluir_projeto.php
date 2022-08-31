<?php

require_once '../vendor/autoload.php';

use Projeto\ControleDeAcesso;
use Projeto\Projeto;

$sessao = new ControleDeAcesso;
$projeto = new Projeto;


$projeto->setId($_GET["id"]);

$projeto->excluirProjeto();

header('location:perfil_principal.php');