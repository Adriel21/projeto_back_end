<?php


use Projeto\Categoria;
use Projeto\ControleDeAcesso;
use Projeto\Profissao;
use Projeto\Usuario;

require_once '../vendor/autoload.php';

$sessao = new ControleDeAcesso;
$profissao = new Profissao;
$usuario = new Usuario;
$usuario->setId($_SESSION['id']);
$dadoUsuario = $usuario->listarUm();

$listaDeProfissoes = $profissao->listar();

foreach($listaDeProfissoes as $profissoes){
	if($profissoes['usuario_id'] === $dadoUsuario['id']){
		$sessao->logout();
	} else {
	}}
		if(isset($_SESSION['usuario_id'])){
			$sessao->logout();
		} else { 
		}
		$categoria = new Categoria;
		$listaDeCategorias = $categoria->listar();
		$usuario = new Usuario;
		$usuario->setId($_SESSION['id']);
		$dados = $usuario->listarUm();
		
		 
			if(isset($_POST['inserir'])) {
				foreach($listaDeProfissoes as $profissoes){
					if($profissoes['usuario_id'] === $dadoUsuario['id']){
						$sessao->logout();
					} } 
				$profissao->setTitulo($_POST['titulo']);
				$profissao->setDescricao($_POST['descricao']);
				$profissao->setCategoriaId($_POST['categoria']);
				$profissao->setUsuarioId($_SESSION['id']);
				$profissao->cadastrar();
			
		
				header('location:freela_valida.php');
					} 
			
			
				
			
	



		
		


?>
<?php require_once '../inc/headerInterno.php';?>


<!--criando formulario de cadastro -->
<div class="container col-md-12 col-sm-10 marketing shadow rounded">
		<div class="row justify-content-center featurette my-5 ">
        <h1 class="ps-5 pt-2 py-2 cta-formulario-atualiza">Cadastrar Perfil Freelancer</h1>
			<div class="col-12 col-lg-8 col-sm-12    ">
			
			
				<form enctype="multipart/form-data" class="formulario-atualiza form-horizontal bg-form  p-sm-5 p-5 my-1 rounded" action="" method="POST">
					
				<div class="form-group mt-2 mb-4">
						<label for="titulo">Titulo: </label>
						<input type="text" class="form-control" id="titulo"  name="titulo" placeholder="Ex: Engenheiro de Software" required>
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
						<textarea class="form-control" id="descricao" name="descricao" rows="10" placeholder="Descreva o seu projeto" minlength="150" required>
						</textarea>
					</div>

					

					

			<div class="container form-check-reverse pe-0 mt-3">
				<div class="d-flex justify-content-lg-end justify-content-center gap-4 d-md-block ">
				<button class=" botao_inserir btn text-white" name="inserir" id="inserir" type="submit">CADASTRAR</button>
				
				</form>

				
			</div>
		</div>
	</div>
<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>

<?php ob_flush() ?>