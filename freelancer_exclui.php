<?php

use Projeto\Freelancer;
use Projeto\Usuario;

require_once './vendor/autoload.php';
$usuario = new Usuario;

$usuario->setProfissaoId($_GET['id']);

$freelancer->excluirCadastro();
header("location:freelancer.php");

