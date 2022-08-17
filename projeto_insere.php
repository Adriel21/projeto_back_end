<?php

use Projeto\Categoria;
use Projeto\Projeto;

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
    $projeto = new Projeto;
    $projeto->setNome($_POST['nome']);
    $projeto->setDescricao($_POST['descricao']);
    $projeto->setCategoriaId($_POST['categoria']);
    // $projeto->setCategoriaId($_POST['categoria']);
    
	$imagem = $_FILES["imagem"];
	$projeto->setImagem($imagem['name']);
	$projeto->upload($imagem);
    // header("location:login.php");


	$projeto->cadastrar();
?>
	<script> window.location.replace("http://freelancer_exclui.php/"); </script>

<?php
}
?>




				
		<form enctype="multipart/form-data" class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

			<div class="mb-3">
				<label class="form-label" for="nome">Nome:</label>
				<input class="form-control" type="text" id="nome" name="nome" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="email">Descricao</label>
				<input class="form-control" name="descricao" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha" required>
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
                <input required class="form-control" type="file" id="imagem" name="imagem"
                accept="image/png, image/jpeg, image/gif, image/svg+xml">
			</div>
			

			<button class="btn btn-primary" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir</button>
		</form>
		
	</article>
</div>