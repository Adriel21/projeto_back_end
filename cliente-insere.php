<?php
use Projeto\Cliente;
use Projeto\ControleDeAcesso;
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
$sessao = new ControleDeAcesso;
$usuario = new Usuario;
$usuario->setId($_GET['id']);
$cliente = new Cliente;


if(isset($_POST['inserir'])) {
   
    $cliente->setNome($_POST['nome']);
	$perfil = $_FILES["perfil"];
	$cliente->setPerfil($perfil['name']);
	$cliente->upload($perfil);
    $cliente->setUsuarioId($_GET['id']);
 
    if(isset($dados['usuario'])) {
        echo 'Você já possui perfil cliente';
    } else { 
       
        $cliente->cadastrar();
    }
 
    
    


 
    // header("location:login.php");

    // header('location:index.php?'. $cliente->getNome());
	
    // $usuario->setClienteId($_POST['']);
    // $usuario->atualizarCadastro();
    
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
                <label class="form-label" for="imagem" class="form-label">Selecione uma imagem:</label>
                <input required class="form-control" type="file" id="imagem" name="perfil"
                accept="image/png, image/jpeg, image/gif, image/svg+xml">
			</div>
			

			<button class="btn btn-primary" id="inserir" name="inserir"><i class="bi bi-save"></i> Inserir</button>
		</form>
		
	</article>
</div>