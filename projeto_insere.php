<?php

use Projeto\Projeto;

require_once './vendor/autoload.php';
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
$categoria = new ;
$listaDeCategorias = $categoria->listar();
if(isset($_POST['inserir'])) {
    $projeto = new Projeto;
	$projeto->setTitulo($_POST['nome']);
	$projeto->setResumo($_POST['resumo']);
    $projeto->setDescricao($_POST['descricao']);
    $projeto->setCategoriaId($_POST['categoria']);

    // header("location:login.php");


	$projeto->cadastrar();

    header('location:login.php');

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Insere</title>
</head>
<body>
    <form action="">
        <label for="nome">Título do Projeto</label>
        <input type="text" name="nome">
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
					
					<?php foreach($listaDeCategorias as $categorias) { ?>
					<option value="<?=$categorias['id']?>"> 
						<?=$categorias['nome']?> 
					</option>
					<?php } ?>
					
				</select>
			</div>
    </form>
</body>
</html>