<?php

use Projeto\Aceite;
use Projeto\ControleDeAcesso;
use Projeto\Profissao;
use Projeto\Projeto;
use Projeto\Rede;
use Projeto\Usuario;

require_once '../vendor/autoload.php';


$sessao = new ControleDeAcesso;
if(isset($_SESSION['confirme'])) {


$usuario = new Usuario;
$usuario->setId($_SESSION['id']);
$dados = $usuario->listarUm();
$projeto = new Projeto;
$projeto->setUsuarioId($_SESSION['id']);
$rede = new Rede;
$rede->setUsuarioId($_SESSION['id']);
$aceite = new Aceite;
$aceite->setUsuarioId($_SESSION['id']);

if($dados['profissao_id'] !== null) {
    $profissao = new Profissao;
    $profissao->setId($dados['profissao_id']);
    $projeto->excluirTodosProjetos();
    $rede->excluirRede();
    $aceite->excluirAceite();
    $usuario->excluirCadastro();
    $profissao->excluirFreela();
    $sessao->logout();
    header('location:../index.php');
} else {
    $projeto->excluirTodosProjetos();
    $rede->excluirRede();
    $aceite->excluirAceite();
    $usuario->excluirCadastro();
    $sessao->logout();
    header('location:../index.php');
}



// Inserindo o array gerado no método listarUm em uma variável
// $dados = $usuario->listarUm();




} else {
    header('location:dashboard_cliente.php?acesso_restrito');
}





