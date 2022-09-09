<?php


use Projeto\ControleDeAcesso;
use Projeto\Profissao;
use Projeto\Usuario;

require_once '../vendor/autoload.php';


$profissao = new Profissao;
$profissao->setUsuarioId($_SESSION['id']);

// Inserindo o array gerado no método listarUm em uma variável
// $dados = $usuario->listarUm();
$usuario->setId($_SESSION['id']);
$usuario->atualizarPr(null);
$profissao->excluirFreela();
$usuario = new Usuario;



$sessao->logout();

header('location:cadastro_exclui.php');





