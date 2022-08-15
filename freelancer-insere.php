<?php

use Projeto\Categoria;
use Projeto\Freelancer;
require_once './vendor/autoload.php';
$categoria = new Categoria;
$listaDeCategorias = $categoria->listar();

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
if(isset($_POST['inserir'])) {
    $freelancer = new Freelancer;
    $freelancer->setNome($_POST['nome']);
    $freelancer->setProfissao($_POST['profissao']);
    $freelancer->setCategoriaId($_POST['categoria']);
    
	$perfil = $_FILES["perfil"];
	$freelancer->setPerfil($perfil['name']);
	$freelancer->upload($perfil);
    // header("location:login.php");


	$freelancer->cadastrar();

}
?>


<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Inserir novo usuário
		</h2>
				
		<form enctype="multipart/form-data" class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

			<div class="mb-3">
				<label class="form-label" for="nome">Nome:</label>
				<input class="form-control" type="text" id="nome" name="nome" required>
			</div>


            <div class="mb-3">
				<label class="form-label" for="nome">Profissão:</label>
				<input class="form-control" type="text" id="nome" name="profissao" required>
			</div>

            <div class="mb-3">
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

			<div class="mb-3">
                <label class="form-label" for="imagem" class="form-label">Selecione uma imagem:</label>
                <input required class="form-control" type="file" id="imagem" name="perfil"
                accept="image/png, image/jpeg, image/gif, image/svg+xml">
			</div>
			

			<button class="btn btn-primary" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir</button>
		</form>
		
	</article>
</div>