<?php

use Projeto\ControleDeAcesso;
use Projeto\Freelancer;
use Projeto\Usuario;

require_once './vendor/autoload.php';
$sessao = new ControleDeAcesso;
$usuario = new Usuario;

$usuario->setPerfil_freela('sim');

// $usuario->validaFreela();
header("location:index.php");

