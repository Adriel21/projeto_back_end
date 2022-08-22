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

    header('location:cadastro.php');

}
?>

<?php require_once './inc/cabecalho-cadastro.php'; ?>

<!--criando formulario de cadastro -->
<section class="cadastro-bloco-azul-marinho"></section>
	<main class="container">
		<div>
			<h1 class="text-center my-2">Cadastro</h1>

                <div class="col d-none d-md-block">
                    <h1 >XPTO.com</h1>
                    <h4 class="text-start">Entre na XPTO, e contemple nossos beneficíos</h4>
                    <p class="text-start">Realize o login para uma melhor experiência</p>
                    <p class="text-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis nemo nostrum aliquam voluptatibus. Cumque, nulla?</p>
                    <p class="col-3"><img src="img/img-projetando.png" alt=""></p>
                </div>

                <form class="container-fluid col-sm-6 m-auto shadow p-3 rounded" action="cadastro.php" method="post" enctype="multipart/form-data">
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
						<input type="file" class="form-control" id="perfil" name="perfil" placeholder="Perfil">
					</div>

					<div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                            <label class="form-check-label" for="form2Example34"> ao criar sua conta, você está aceitando os termos de serviço e a politica de privacidade </label>
                    </div>

					<div class="d-grid gap-2 text-center">
					    <button type="submit" class="btn btn-primary mt-3" name="inserir">Cadastra</button>
                        <a href="login.php">Você já está registrado? Login</a>
                    </div>
				</form>
		</div>
	</main>
	
<section class="cadastro-bloco-azul-marinho"></section>