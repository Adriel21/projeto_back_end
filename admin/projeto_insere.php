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
						<label for="titulo" class="pb-1">Titulo</label>
						<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo do projeto">
					</div>
                    <div class="form-group pb-3 mt-2">
						<label for="resumo" class="pb-1">Resumo</label>
						<input type="text" class="form-control" id="resumo" name="resumo" placeholder="Telefone">
					</div>

					<div class="form-group pb-3 mt-2">
					<select name="categoria" class="form-select" id="categoria" class="pb-1" placeholder="Selecione a categoria do projeto">
						<?php foreach($listaDeCategorias as $categoria) {?>
					<option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
					<?php } ?>
					</select>
						
					</div>

					<div class="form-group  mt-2">
						<label for="descricao" class="pb-1">Descrição</label>
						<textarea class="form-control" id="descricao" name="descricao" placeholder="Descreva o seu projeto">
						</textarea>
					</div>
					
					<div class="pt-4 text-center">
                    <button class="botao-feed btn text-white" id="inserir" name="inserir" type="submit">CADASTRAR</button>
                    </div>
				</form>
			</div>
		</div>
	</div>

					
					

            
    
