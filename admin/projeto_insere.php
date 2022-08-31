<?php

use Projeto\Categoria;
use Projeto\ControleDeAcesso;
use Projeto\Projeto;

require_once '../inc/cabecalho_admin.php';
require_once '../vendor/autoload.php';
// if( isset($_POST['inserir']) ){
// 	$usuario = new Usuario;
// 	$usuario->setNome($_POST['nome']);
// 	$usuario->setEmail($_POST['email']);
// 	$usuario->setTipo($_POST['tipo']);
// 	$usuario->setSenha(  $usuario->codificaSenha($_POST['senha'])  );
// 	// echo $usuario->getSenha();

// 	$usuario->inserir();
// 	header("location:usuarios.php");
// }
$sessao = new ControleDeAcesso;

$categoria = new Categoria;
$listaDeCategorias = $categoria->listar();
if(isset($_POST['inserir'])) {
    // $projeto = new Projeto;
	// $projeto->setTitulo($_POST['titulo']);
	// $projeto->setResumo($_POST['resumo']);
    // $projeto->setDescricao($_POST['descricao']);
    // $projeto->setCategoriaId($_POST['categoria']);
    // $projeto->setUsuarioId($_GET['id']);
    $projeto = new Projeto;
    $projeto->setTitulo($_POST['titulo']);
    $projeto->setResumo($_POST['resumo']);
    $projeto->setDescricao($_POST['descricao']);
    $projeto->setUsuarioId($_GET['id']);
    $projeto->setCategoriaId($_POST['categoria']);

    // header("location:login.php");


	$projeto->cadastrar();

    header('location:perfil_principal.php?id=' . $_SESSION['id']);

}

?>



<!--criando formulario de cadastro -->
<div class="container col-md-12 col-sm-12 marketing shadow rounded">
		<div class="row justify-content-center featurette my-5 p-sm-5">
        <h1 class="ps-5 pt-2 py-2 cta-formulario-atualiza">Cadastrar projeto</h1>
			<div class="col-12 col-md-8 col-sm-12  p-sm-4 p-4 ">
				<form enctype="multipart/form-data" class="formulario-atualiza form-horizontal bg-form  p-sm-5 p-5 my-1 rounded" action="" method="POST">
					
					
					<div class="form-group pb-3  mt-2">
						<label for="email" class="pb-1">Titulo</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
                    <div class="form-group pb-3 mt-2">
						<label for="email" class="pb-1">Resumo</label>
						<input type="email" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
					</div>
					<div class="form-group  mt-2">
						<label for="senha" class="pb-1">Descrição</label>
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
					</div>
					
					<div class="pt-4 text-center">
                    <button class="botao-feed btn bg-info text-dark" type="submit">CADASTRAR</button>
                    </div>
				</form>
			</div>
		</div>
	</div>

					
					

            
    
