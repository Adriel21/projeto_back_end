<?php

use Projeto\ControleDeAcesso;
use Projeto\Freelancer;
use Projeto\Usuario;

require_once './vendor/autoload.php';
$sessao = new ControleDeAcesso;
$usuario = new Usuario;
$usuario->setId($_GET['id']);
$dados = $usuario->listarUm();

// $usuario->validaFreela();
$sessao->loginDois($dados['id'], $dados['email'], $dados['nome'], $dados['perfil'], $dados['categoria_id']);
header('location:index.php');

