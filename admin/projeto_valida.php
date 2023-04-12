<?php
ob_start();

use Projeto\ControleDeAcesso;
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

ob_flush();