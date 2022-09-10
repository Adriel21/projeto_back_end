<?php

use Projeto\ControleDeAcesso;
use Projeto\Usuario;

require_once '../vendor/autoload.php';


$sessao = new ControleDeAcesso;

$usuario = new Usuario;
// Coletando id da URL e passando para a classe Usuário
$usuario->setId($_SESSION['id']);


$dadosDois = $usuario->listarUm();

// $usuario->validaFreela();
// Passando parâmetros para a sessao ser iniciada com as novas informações
$sessao->loginDois($dadosDois['id'], $dadosDois['nome'], $dadosDois['email'], $dadosDois['perfil'], $dadosDois['profissao_id']);
header('location:dashboard_cliente.php?id=' . $_SESSION['id']);

