<?php
use Projeto\Usuario;

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
if(isset($_POST['inserir'])) {
    $usuario = new Usuario;
	$usuario->setNome($_POST['nome']);
	$usuario->setEmail($_POST['email']);
	$usuario->setSenha($usuario->codificaSenha($_POST['senha'])  );
	
	$perfil = $_FILES["perfil"];
	$usuario->setPerfil($perfil['name']);
	$usuario->upload($perfil);
    // header("location:login.php");


	$usuario->cadastrar();

    header('location:login.php');

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
				<label class="form-label" for="email">E-mail:</label>
				<input class="form-control" type="email" id="email" name="email" required>
			</div>

			<!-- <div class="mb-3">
				<label class="form-label" for="telefone">Telefone:</label>
				<input class="form-control" type="telefone" id="telefone" name="telefone" required>
			</div> -->

			<div class="mb-3">
				<label class="form-label" for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha" required>
			</div>

			<div class="mb-3">
                <label class="form-label" for="imagem" class="form-label">Selecione uma imagem:</label>
                <input required class="form-control" type="file" id="imagem" name="perfil"
                accept="image/png, image/jpeg, image/gif, image/svg+xml">
			</div>
			

            <!-- <div class="mb-3">
                <label class="form-label" for="categoria">Categoria:</label>
                <select class="form-select" name="tipo" id="categoria" required>
                    <option value=""></option>
					<option 
                    value="Cliente"> 
						Cliente
					</option>

					<option 
                    value="Freelancer"> 
						Freelancer
					</option>

					
				
                </select>
            </div> -->
			

			<button class="btn btn-primary" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir</button>
		</form>
		
	</article>
</div>

<?php require_once './inc/footer_externo.php'; ?>