<?php
ob_start();

use Projeto\ControleDeAcesso;
use Projeto\Profissao;
use Projeto\Usuario;

require_once '../vendor/autoload.php';
$sessao = new ControleDeAcesso;

$profissao = new Profissao;

// $dadosFreela = $profissao->listarTodos();
// $usuario = new Usuario;
// $dadosUsuario = $usuario->listar();

// foreach($dadosUsuario as $usuarios){
// if($usuarios['id'] === $_SESSION['id']){
//     $usuario->setId($_SESSION['id']);
//     $usuario->setProfissaoId(0);
//     $usuario->atualizarPr();
// }
// }
// foreach($dadosFreela as $dados) {
//     if(($dados['usuario_id'] === $_SESSION['id'])){
//         $profissao->setUsuarioId($_SESSION['id']);
//         $profissao->excluirFreela();
//         echo 'foi';
//     } else {
//         echo 'errou';
//     }    
// }









