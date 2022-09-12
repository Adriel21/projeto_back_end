<?php
ob_start();

use Projeto\ControleDeAcesso;
use Projeto\Usuario;

require_once '../vendor/autoload.php';


$sessao = new ControleDeAcesso;
$usuario = new Usuario;
$usuario->setId($_GET['id']);
// Inserindo o array gerado no método listarUm em uma variável
$dados = $usuario->listarUm();






if($dados['profissao_id'] !== null){
    $sessao->loginDois($dados['id'], $dados['nome'], $dados['email'], $dados['perfil'], $dados['profissao_id']);
    header('location:./dashboard_cliente.php?id=' . $_SESSION['id']);;
        ///echo 'errou';
} else {
    $sessao->login($dados['id'], $dados['nome'], $dados['email'], $dados['perfil']);
        header('location:./dashboard_cliente.php?id=' . $_SESSION['id']);
}


 ob_flush();