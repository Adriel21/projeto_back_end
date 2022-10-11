<?php
ob_start();
use Projeto\Usuario;
use Projeto\Utilitarios;

require_once 'vendor/autoload.php';
("location:usuarios.php");
// }
if(isset($_POST['inserir'])) {
    $usuario = new Usuario;
	$usuario->setNome($_POST['nome']);
	$usuario->setEmail($_POST['email']);
	$dados = $usuario->buscar();
	if($dados['email'] === $_POST['email']) {
		header('location:cadastro.php?email_existente');
	} else { 
	$verificao = Utilitarios::senhaValida($_POST['senha']);
	$termos = $_POST['aceite'];

	if($verificao and $termos === 'Aceite confirmado') {
		$usuario->setSenha($usuario->codificaSenha($_POST['senha'])  );
	 
		$perfil = $_FILES["perfil"];
		$usuario->setPerfil($perfil['name']);
		$usuario->upload($perfil);
		// header("location:login.php");
	
	
		 $usuario->cadastrar();
	
		header('location:verificao_aceite.php?email=' . $_POST['email']);
	} else if ($verificao === false) {
		header('location:cadastro.php?formato_de_senha_inválido');
	} else if ($termos !== "Aceite confirmado"){
		header('location:cadastro.php?aceite_não_efetuado');
	} 

	}
}


?>
<?php require_once './inc/headerValidacao.php'; ?>

<?php if(isset($_GET['formato_de_senha_inválido'])) {
	$feedback = "A senha deve conter: [ABC, abc, 123, !@#$%&]";
} else if (isset($_GET['aceite_não_efetuado'])) {
	$feedback = 'Você deve aceitar os termos e a política de privacidade para prosseguir <i class="bi bi-exclamation-octagon"></i>';
} else if (isset($_GET['email_existente'])) {
	$feedback = 'Email já cadastrado <i class="bi bi-exclamation-octagon"></i>';
}

?>

<!--criando formulario de cadastro -->

	<div class="container marketing shadow shadow-lg">
	
		<div class="row featurette my-5 p-sm-5">
		<?php if(isset($feedback)){?>
				<p class="my-2 alert alert-warning text-center">
					<?=$feedback?>
				</p>
        <?php } ?>
			<div class="col-md-6 d-none d-lg-block pt-5">
                    <h4 class="text-start titulo_cadastro">Junte-se a nossa rede!</h4>
                    <p class="text-start">Realize o cadastro para uma melhor experiência</p>
				    <img class="d-flex w-75 m-auto" src="img/img-compress/img-pessoas-fazendo-cadastro-800.png">
			</div>

			<div class="ccol-12 col-lg-6 p-sm-3 p-4">
				<form enctype="multipart/form-data" class="form-horizontal shadow-lg bg-form shadow p-sm-5 p-3 rounded" action="" method="POST">
					<div class="d-grid gap-2 text-center">
                        <button class="btn btn-primary google-button" type="button">Google</button>
                        <button class="btn btn-primary" type="button">LinkedIn</button>
                        <p class="my-2">OU</p>
                    </div>

					<div class="form-group mt-2">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required>
					</div>
					<div class="form-group mt-2">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="exemplo@gmail.com" required>
					</div>
					<div class="form-group mt-2">
						<label for="senha">Senha</label>
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Maiúsculas, Minúsculas, Números e !@#$%&"] minlength="8" required>
					</div>
					<div class="form-group mt-2">
						<label for="perfil">Foto Perfil</label>
						<input type="file" class="form-control" id="perfil" name="perfil" placeholder="Perfil"  accept="image/png, image/jpeg, image/gif, image/svg+xml" required>
					</div>

					<div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" value="Aceite confirmado" id="form2Example34"  name="aceite">
                            <label class="form-check-label" for="form2Example34"><a href="">Termos de responsabilidade</a> | <a href="">Política de privacidade</a></label>
                    </div>

					<div class="d-grid gap-2 text-center">
					    <button type="submit" class="btn botao_index mt-3" id="inserir" name="inserir">Cadastrar</button>
                        <a href="login.php">Já possui cadastro? Login</a>
                    </div>
				</form>
			</div>
		</div>
	</div>
