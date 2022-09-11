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
$hoje = date('y/m/d');
if(isset($_POST['atualizar'])) {
 
	$projeto->setTitulo($_POST['titulo']);
    $projeto->setResumo($_POST['resumo']);
    $projeto->setDescricao($_POST['descricao']);
    $projeto->setData($hoje);
    $projeto->setCategoriaId($_POST['categoria']);
    // $profissao->setUsuarioId($_GET['id']);

    // header("location:login.php");


	$projeto->atualizarProjeto();

    header('location:dashboard_cliente.php?id=' . $_SESSION['id']);

}
?>


<div class="container col-md-12 col-sm-12 marketing shadow rounded">
		<div class="row justify-content-center featurette  ">
        <h1 class="ps-5 pt-2 py-1 cta-formulario-atualiza">Projetos</h1>
			<div class="col-12 col-lg-8 col-sm-12  p-sm-4 p-4 ">
				<form enctype="multipart/form-data" class="formulario-atualiza form-horizontal bg-form  p-sm-5 p-5 my-1 rounded" action="" method="POST">
					
					
					<div class="form-group pb-3  mt-2">
						<label for="titulo" class="pb-1">Título</label>
						<input value="<?=$dados['titulo']?>" type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo do projeto">
					</div>
                    <div class="form-group pb-3 mt-2">
						<label for="resumo" class="pb-1">Resumo</label>
						<textarea class="form-control" id="resumo" name="resumo" rows="4" placeholder="resumo do projeto"><?=$dados['resumo']?>
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

					<div class="form-group mt-2 mb-4">
					<label for="descricao" class="pb-1">Descrição</label>
						<textarea class="form-control" id="descricao" name="descricao" rows="10" placeholder="Descrição do projeto"><?=$dados['descricao']?>
						</textarea>
					</div>

				
                
				<div class="container form-check-reverse pe-0">
				<div class="d-flex justify-content-lg-end justify-content-center gap-4 d-md-block ">
				<button class=" botao_inserir btn text-white" name="atualizar" id="atualizar" type="submit">ATUALIZAR</button>
				<button class="botao_excluir btn  text-white" id="excluir" type="submit"><a href="excluir_projeto.php?id=<?=$dados['id']?>" class="excluir">EXCLUIR</a></button>
				</div>

						

                </div>
           
			
				</form>
			</div>
		</div>
        <script src="js/confirm.js"></script>
		<script src="../js/bootstrap.bundle.js"></script>
	</div>
	
    
  

    

        
