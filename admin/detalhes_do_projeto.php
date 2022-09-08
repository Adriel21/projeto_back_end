<?php

use Projeto\Categoria;
use Projeto\ControleDeAcesso;
use Projeto\Projeto;

require_once '../inc/headerInterno.php';


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

    header('location:dashboard_cliente.php?id=' . $_SESSION['id']);

}
?>


<div class="container col-md-12 col-sm-12 marketing shadow rounded">
		<div class="row justify-content-center featurette my-5 p-sm-5">
        <h1 class="ps-5 pt-2 py-2 cta-formulario-atualiza">Projetos</h1>
			<div class="col-12 col-md-8 col-sm-12  p-sm-4 p-4 ">
				<form enctype="multipart/form-data" class="formulario-atualiza form-horizontal bg-form  p-sm-5 p-5 my-1 rounded" action="" method="POST">
					
					
					<div class="form-group pb-3  mt-2">
						<label for="titulo" class="pb-1">Título</label>
						<input value="<?=$dados['titulo']?>" type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo do projeto">
					</div>
                    <div class="form-group pb-3 mt-2">
						<label for="resumo" class="pb-1">Resumo</label>
						<input value="<?=$dados['resumo']?>" type="text" class="form-control" id="resumo" name="resumo" placeholder="Resumo do projeto">
					</div>
					<div class="form-group  mt-2">
					<label for="descricao" class="pb-1">Descrição</label>
						<textarea class="form-control" id="descricao" name="descricao" rows="10" placeholder="Descrição do projeto"><?=$dados['descricao']?>
						</textarea>
					</div>

					<div class="mb-3">
                <label class="form-label" for="categoria">Categoria:</label>
                <select class="form-select" name="categoria" id="categoria" required>
                    <option value=""></option>
                   	<?php foreach($listaDeCategorias as $categorias) { ?>
					<option 
                    <?php if($dados['categoria_id'] === $categorias['id'] ) echo " selected " ?> 
                    value="<?=$categorias['id']?>"> 
						<?=$categorias['nome']?> 
					</option>
					<?php } ?>
                </select>
            </div>

                
				<div class="container form-check-reverse">
				<div class="d-grid gap-5 d-md-block">
				<button class=" botao_inserir btn text-white" name="atualizar" id="atualizar" type="submit">ATUALIZAR</button>
				<button class=" botao_excluir btn  text-white" id="inserir" type="submit"><a href="excluir_projeto.php?id=<?=$dados['id']?>">EXCLUIR</a></button>
				</div>

						

                </div>
           
			
				</form>
			</div>
		</div>
	</div>

        
