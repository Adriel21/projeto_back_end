<?php
ob_start();

use Projeto\Aceite;
use Projeto\ControleDeAcesso;
use Projeto\Profissao;
use Projeto\Projeto;
use Projeto\Rede;
use Projeto\Usuario;

require_once '../vendor/autoload.php';


$sessao = new ControleDeAcesso;
if(isset($_GET['confirme'])) {



$projeto = new Projeto;
$projeto->setUsuarioId($_SESSION['id']);
$rede = new Rede;
$rede->setUsuarioId($_SESSION['id']);
$aceite = new Aceite;
$aceite->setUsuarioId($_SESSION['id']);
$profissao = new Profissao;
$profissao->setUsuarioId($_SESSION['id']);


    $profissao->excluirFreela();
    $projeto->excluirTodosProjetos();
    $rede->excluirRede();
    $aceite->excluirAceite();
  

header('location:usuario_exclui.php');
    
  
  
 




// Inserindo o array gerado no método listarUm em uma variável
// $dados = $usuario->listarUm();




} else {
    header('location:dashboard_cliente.php?acesso_restrito');
}


 ob_flush();


