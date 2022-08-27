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
<?php require_once './inc/cabecalho-cadastro.php'; ?>

<!--criando formulario de cadastro -->
	<div class="container marketing shadow">
		<div class="row featurette my-5 p-sm-5">

			<div class="col-md-6 d-none d-md-block">
				<h1 >XPTO.com</h1>
                    <h4 class="text-start">Entre na XPTO, e contemple nossos beneficíos</h4>
                    <p class="text-start">Realize o login para uma melhor experiência</p>
                    <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nemo nostrum aliquam voluptatibus. Cumque, nulla?</p>
					<img class="d-flex w-100 m-auto" src="img/img-projetando.png">
			</div>

			<div class="col-md-6 p-sm-5 p-4">
				<form enctype="multipart/form-data" class="form-horizontal bg-form p-sm-5 p-3 rounded" action="" method="POST">
					<div class="d-grid gap-2 text-center">
                        <button class="btn btn-primary google-button" type="button">Google</button>
                        <button class="btn btn-primary" type="button">LinkedIn</button>
                        <p class="my-2">OU</p>
                    </div>

					<div class="form-group mt-2">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
					</div>
					<div class="form-group mt-2">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Email">
					</div>
					<div class="form-group mt-2">
						<label for="senha">Senha</label>
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
					</div>
					<div class="form-group mt-2">
						<label for="perfil">Foto Perfil</label>
						<input type="file" class="form-control" id="perfil" name="perfil" placeholder="Perfil"  accept="image/png, image/jpeg, image/gif, image/svg+xml">
					</div>

					<div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                            <label class="form-check-label" for="form2Example34"> ao criar sua conta, você está aceitando os termos de serviço e a politica de privacidade </label>
                    </div>

					<div class="d-grid gap-2 text-center">
					    <button type="submit" class="btn btn-primary mt-3" id="inserir" name="inserir">Cadastrar</button>
                        <a href="login.php">Você já está registrado? Login</a>
                    </div>
				</form>
			</div>
		</div>
	</div>
