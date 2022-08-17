<?php

use Projeto\Categoria;
use Projeto\Profissao;
use Projeto\Usuario;

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
$profissao = new Profissao;





if(isset($_POST['inserir'])) {

    $profissao->setTitulo($_POST['titulo']);
    $profissao->setDescricao($_POST['descricao']);
    $profissao->setCategoriaId($_POST['categoria']);
	$profissao->setUsuarioId($_GET['id']);
    



	$profissao->cadastrarFreela();
	header("location:freelancer_exclui.php?id=" . $profissao->getId());

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>


<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Inserir novo usuário
		</h2>
				
		<form enctype="multipart/form-data" class="mx-auto w-75" action="" method="post" id="form-inserir" name="form-inserir">

			<div class="mb-3">
				<label class="form-label" for="nome">Titulo:</label>
				<input class="form-control" type="text" id="nome" name="titulo" required>
			</div>


            <div class="mb-3">
				<label class="form-label" for="nome">Descrição:</label>
				<input class="form-control" type="text" id="nome" name="descricao" required>
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

		
			

			<button class="btn btn-primary" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir</button>
		</form>
		
	</article>
</div>
</body>
</html>