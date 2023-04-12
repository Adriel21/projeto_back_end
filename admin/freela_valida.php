<?php


use Projeto\ControleDeAcesso;
use Projeto\Profissao;
use Projeto\Usuario;

require_once '../vendor/autoload.php';


$sessao = new ControleDeAcesso;


$usuario = new Usuario;
// Coletando id da URL e passando para a classe Usuário
$usuario->setId($_SESSION['id']);


$dadosDois = $usuario->listarUm();
$profissao = new Profissao;
$dadosProfissao = $profissao->listar();

foreach($dadosProfissao as $dados){
    if($dadosDois['id'] === $dados['usuario_id']){
        $sessao->loginDois($dadosDois['id'], $dadosDois['nome'], $dadosDois['email'], $dadosDois['perfil'], $dados['usuario_id']);?>
      <script>window.location.href = "dashboard_cliente.php";</script>
<?php
    } else if ($dadosDois['id'] !== $dados['usuario_id']){
        	$sessao->login($dadosDois['id'], $dadosDois['nome'], $dadosDois['email'], $dadosDois['perfil']); ?>
	<script>window.location.href = "dashboard_cliente.php";</script>
<?php
}
}

?>

