<?php

use Projeto\Categoria;
use Projeto\ControleDeAcesso;
use Projeto\Profissao;
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
    $profissao = new Profissao;
	$profissao->setTitulo($_POST['titulo']);
    $profissao->setDescricao($_POST['descricao']);
    $profissao->setCategoriaId($_POST['categoria']);
    $profissao->setUsuarioId($_GET['id']);

    // header("location:login.php");


	$profissao->cadastrar();

    header('location:freela_valida.php?id=' . $_SESSION['id']);

}

?>

<div class="container col-md-12 col-sm-12 marketing shadow rounded">
		<div class="row justify-content-center featurette my-5 p-sm-5">
        <h1 class="ps-5 pt-2 py-2 cta-formulario-atualiza">Cadastrar projeto</h1>
			<div class="col-12 col-md-8 col-sm-12  p-sm-4 p-4 ">
				<form enctype="multipart/form-data" class="formulario-atualiza form-horizontal bg-form  p-sm-5 p-5 my-1 rounded" action="" method="POST">
					
					
					<div class="form-group pb-3  mt-2">
						<label for="email" class="pb-1">Título do Projeto</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
                    <div class="form-group pb-3 mt-2">
						
						
						<label for="descricao" class="form-label" >Descrição do projeto</label>
  						<textarea class="form-control" id="descricao"  placeholder="Descrição do projeto"rows="10"></textarea>
					</div>

                    <label class="form-label" for="categoria">Categoria:</label>
                <select class="form-select" name="categoria" id="categoria" required>
					<option value=""></option>
					
					<?php foreach($listaDeCategorias as $categorias) { ?>
					<option value="<?=$categorias['id']?>"> 
						<?=$categorias['nome']?> 
					</option>
					<?php } ?>
					
				</select>
			</div>
					
					<div class="pt-4 text-center">
                    <button class="botao-feed btn" type="submit">CADASTRAR</button>
                    </div>
				</form>
			</div>
		</div>
	</div>

<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Insere</title>
</head>
<body>
    <form action="" method="POST">
        <label for="titulo">Título do Projeto</label>
        <input type="text" name="titulo">
        <hr>
         <label for="resumo">Resumo do Projeto</label>
        <input type="text" name="resumo"> 
        <hr>
        <label for="descricao">Descrição do projeto</label>
        <input type="text" name="descricao">

        <div class="mb-3">
                <label class="form-label" for="categoria">Categoria:</label>
                <select class="form-select" name="categoria" id="categoria" required>
					<option value=""></option>
					
					
					
				</select>
			</div>

            <button class="btn btn-primary" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir</button>
    </form>
</body>
</html> -->