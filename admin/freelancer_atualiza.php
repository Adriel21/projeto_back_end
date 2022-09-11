<?php

use Projeto\Categoria;
use Projeto\ControleDeAcesso;
use Projeto\Profissao;

require_once '../inc/headerInterno.php';

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
$profissao = new Profissao;
$profissao->setId($_SESSION['profissao_id']);

if(isset($_POST['atualizar'])) {
   
	if($_POST['titulo'] === '' || $_POST['descricao'] === ''){
		header('location:freelancer_atualiza.php?preencha_todas_informacoes');
	} else {

	
   
    $profissao->setTitulo($_POST['titulo']);
    $profissao->setDescricao($_POST['descricao']);
    $profissao->setCategoriaId($_POST['categoria']);

   


	$profissao->atualizarFreela();

    header('location:dashboard_freelancer.php?id=' . $_SESSION['id']);
}

}

?>



<!--criando formulario de cadastro -->
<div class="container col-md-12 col-sm-12 marketing shadow rounded">
		<div class="row justify-content-center featurette my-5 p-sm-5">
        <h1 class="ps-5 pt-2 py-2 cta-formulario-atualiza">Atualizar perfil Freelancer</h1>
			<div class="col-12 col-md-8 col-sm-12  p-sm-4 p-4 ">
				<form enctype="multipart/form-data" class="formulario-atualiza form-horizontal bg-form  p-sm-5 p-5 my-1 rounded" action="" method="POST">
					
					
					<div class="form-group pb-3  mt-2">
						<label for="titulo" class="pb-1">Titulo</label>
						<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo do projeto" value="<?=$dadosFreela['titulo']?>" required>
					</div>

                <div class="mb-3">
                <label class="form-label" for="categoria">Categoria:</label>
                <select class="form-select" name="categoria" id="categoria" required>
                    <option value=""></option>
                   	<?php foreach($listaDeCategorias as $categorias) { ?>
					<option 
                    <?php if($dadosFreela['categoria'] === $categorias['id'] ) echo " selected " ?> 
                    value="<?=$categorias['id']?>"> 
						<?=$categorias['nome']?> 
					</option>
					<?php } ?>
                </select>
                 </div>

                    <div class="form-group mt-2 mb-4">
					<label for="descricao" class="pb-1">Descrição</label>
						<textarea class="form-control" id="descricao" name="descricao" rows="10" placeholder="Descrição do projeto" minlength="250"><?=$dadosFreela['descricao']?>
						</textarea>
					</div>

					
                    <div class="container form-check-reverse pe-0">
				<div class="d-flex justify-content-lg-end justify-content-center gap-4 d-md-block ">
				<button class=" botao_inserir btn text-white" name="atualizar" id="atualizar" type="submit">ATUALIZAR</button>
				</div>
				</form>
			</div>
		</div>
	</div>

    <script src="js/confirm.js"></script>
</body>
</html>

					
					

            
    
