<?php

use Projeto\Cliente;
require_once './vendor/autoload.php';
$cliente = new Cliente;
$cliente->setId($_GET['id']);
$dados = $cliente->listarUm();

if(isset($_POST['atualizar'])) {
    $cliente->setNome($_POST['nome']);
    $cliente->setEmail($_POST['email']);
    $cliente->setSenha($_POST['senha']);
   

	if(empty($_POST['perfil'])) {
        $cliente->setPerfil($dados['perfil']);
     } else {
        $cliente->setPerfil($_POST['perfil']);
     }
    if(empty($_POST['senha'])) {
        $cliente->setSenha($dados['senha']);
    } else {
        $cliente->setSenha(  
			$cliente->verificaSenha($_POST['senha'], $dados['senha'])
		);
    }
    
    $cliente->atualizarCadastro();
    header('location:cliente.php');
}
// Utilitarios::dump($dados);

//if(isset($_POST['atualizar'])){
////	$usuario->setNome($_POST['nome']);
//	$usuario->setEmail($_POST['email']);
//	$usuario->setTipo($_POST['tipo']);

	// E aí vem a senha....

	/* Algoritmo da Senha 
	Se o campo senha no formulário estiver vazio,
	significa que o usuário NÃO MUDOU A SENHA. */
	//if( empty($_POST['senha']) ){
		//$usuario->setSenha( $dados['senha'] );
	//} else {
		/* Caso contrário, se o usuário digitou alguma coisa
		no campo senha, precisaremos verificar o que foi digitado */
	//	$usuario->setSenha(  
			//$usuario->verificaSenha($_POST['senha'], $dados['senha'])
	//	);
	//}

	//$usuario->atualizar();
	//header("location:usuarios.php");
//}
?>


<div class="row">
	<article class="col-12 bg-white rounded shadow my-1 py-4">
		
		<h2 class="text-center">
		Atualizar dados do usuário
		</h2>
				
<!-- Exercícios
Exiba os dados nos campos do formulário abaixo, exceto
a senha. -->

		<form class="mx-auto w-75" action="" method="post" id="form-atualizar" name="form-atualizar">

			<div class="mb-3">
				<label class="form-label" for="nome">Nome:</label>
				<input value="<?=$dados['nome']?>"
				 class="form-control" type="text" id="nome" name="nome" required>
			</div>

			<div class="mb-3">
				<label class="form-label" for="email">E-mail:</label>
				<input value="<?=$dados['email']?>"
				 class="form-control" type="email" id="email" name="email" required>
			</div>

			<div class="mb-3">
                <label class="form-label" for="imagem" class="form-label">Selecione uma imagem:</label>
                <input class="form-control" type="file" id="imagem" name="perfil"
                accept="image/png, image/jpeg, image/gif, image/svg+xml">
			</div>

			<div class="mb-3">
				<label class="form-label" for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha" placeholder="Preencha apenas se for alterar">
			</div>


			
			<button class="btn btn-primary" name="atualizar"><i class="bi bi-arrow-clockwise"></i> Atualizar</button>
		</form>
		
	</article>
</div>

