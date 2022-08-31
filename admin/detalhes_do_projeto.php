<?php

use Projeto\Categoria;
use Projeto\ControleDeAcesso;
use Projeto\Projeto;

require_once '../vendor/autoload.php';

$sessao = new ControleDeAcesso;
$categoria = new Categoria;
$listaDeCategorias = $categoria->listar();
$projeto = new Projeto;
$projeto->setId($_GET['id']);
$dados = $projeto->listarUm();
if(isset($_POST['atualizar'])) {
 
	$projeto->setTitulo($_POST['titulo']);
    $projeto->setResumo($_POST['resumo']);
    $projeto->setDescricao($_POST['descricao']);
    $projeto->setCategoriaId($_POST['categoria']);
    // $profissao->setUsuarioId($_GET['id']);

    // header("location:login.php");


	$projeto->atualizarProjeto();

    header('location:perfil_principal.php?id=' . $_SESSION['id']);

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
					
					<?php foreach($listaDeCategorias as $categorias) { ?>
					<option value="<?=$categorias['id']?>"> 
						<?=$categorias['nome']?> 
					</option>
					<?php } ?>
					
				</select>
			</div>

            <button class="btn btn-primary" id="inserir" name="atualizar"><i class="bi bi-save"></i> Inserir</button>
            
            <button class="btn btn-primary" id="inserir" name="excluir"><i class="bi bi-save"></i> <a href="excluir_projeto.php?id=<?=$dados['id']?>">Excluir</a></button>
    </form>
</body>
</html>