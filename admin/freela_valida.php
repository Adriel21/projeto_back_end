<?php

use Projeto\ControleDeAcesso;
use Projeto\Profissao;
use Projeto\Projeto;
use Projeto\Usuario;

require_once './vendor/autoload.php';


$sessao = new ControleDeAcesso;
$profissao = new Profissao;
// Coletando id da URL e passando para a classe associada a profissao
$profissao->setUsuarioId($_GET['id']);
// Inserindo o array gerado no método listarUm em uma variável
$dados = $profissao->listarUm();
$usuario = new Usuario;
// Coletando id da URL e passando para a classe Usuário
$usuario->setId($_GET['id']);
// Passando para a chave estrangeira o id(chave primária) gerada de profissao para efetuar relacionamento
$usuario->setProfissaoId($dados['id']);
// Chamando método atualizarPr para que haja a atualização/inserção do profissao_id coletado 
$usuario->atualizarPr();
// var_dump($profissao);
// Adicionando método listarUm de Usuario numa variável
$dadosDois = $usuario->listarUm();

// $usuario->validaFreela();
// Passando parâmetros para a sessao ser iniciada com as novas informações
$sessao->loginDois($dadosDois['id'], $dadosDois['nome'], $dadosDois['email'], $dadosDois['perfil'], $dadosDois['profissao_id']);
header('location:perfil_freela.php?id=' . $_SESSION['id']);

