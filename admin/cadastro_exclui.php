<?php

use Projeto\Aceite;
use Projeto\ControleDeAcesso;
use Projeto\Profissao;
use Projeto\Projeto;
use Projeto\Rede;
use Projeto\Usuario;

require_once '../vendor/autoload.php';


$sessao = new ControleDeAcesso;
$usuario = new Usuario;
$usuario->setId($_SESSION['id']);
$projeto = new Projeto;
$projeto->setUsuarioId($_SESSION['id']);
$rede = new Rede;
$rede->setUsuarioId($_SESSION['id']);
$aceite = new Aceite;
$aceite->setUsuarioId($_SESSION['id']);
$profissao = new Profissao;
$profissao->setUsuarioId($_SESSION['id']);

// Inserindo o array gerado no método listarUm em uma variável
// $dados = $usuario->listarUm();
$profissao->excluirFreela();
$projeto->excluirTodosProjetos();
$rede->excluirRede();
$aceite->excluirAceite();
$usuario->excluirCadastro();

$sessao->logout();

header('location:../index.php');





