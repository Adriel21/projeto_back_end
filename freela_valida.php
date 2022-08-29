<?php

use Projeto\ControleDeAcesso;
use Projeto\Profissao;
use Projeto\Projeto;
use Projeto\Usuario;

require_once './vendor/autoload.php';
// $sessao = new ControleDeAcesso;
// $projeto = new Projeto;
// $projeto->setUsuarioId($_GET['id']);
// $dados = $projeto->listarDetalhes();

// $usuario->validaFreela();
// $sessao->loginTres($dados['usuario_id'], $dados['nome'], $dados['email'], $dados['perfil'], $dados['categoria_id'], $dados['titulo']);
// header('location:perfil_principal.php');
$sessao = new ControleDeAcesso;
$profissao = new Profissao;
$profissao->setUsuarioId($_GET['id']);
$dados = $profissao->listarUm();
$usuario = new Usuario;
$usuario->setId($_GET['id']);
$usuario->setProfissaoId($dados['id']);
$usuario->atualizarPr();
// var_dump($profissao);
$dadosDois = $usuario->listarUm();

// $usuario->validaFreela();
$sessao->loginDois($dadosDois['id'], $dadosDois['nome'], $dadosDois['email'], $dadosDois['perfil'], $dadosDois['profissao_id']);
header('location:perfil_freela.php?id=' . $_SESSION['id']);

