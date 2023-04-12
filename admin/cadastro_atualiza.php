<?php

ob_start();

use Projeto\ControleDeAcesso;

use Projeto\Usuario;

use Projeto\Utilitarios;



require_once '../inc/headerInterno.php';



// Criamos objeto para acessar os recursos de sessão PHP na classe ControleDeAcesso

$sessao = new ControleDeAcesso;



// Executamos verificaAcesso para checar se tem alguém logado

 $sessao->verificaAcesso();



$usuario = new Usuario;

$usuario->setId($_SESSION['id']);

$dados = $usuario->listarUm();

// var_dump($dados);

if(isset($_POST['atualizar'])) {

	$usuario->setNome($_POST['nome']);

	$usuario->setEmail($_POST['email']);

    $dadosBusca = $usuario->buscar();

	if($dadosBusca['email'] === $_POST['email'] && $dados['email'] !== $dadosBusca['email']) {

		header('location:cadastro_atualiza.php?email_existente'); 

	} else {

	if( empty($_POST['senha']) ){

		$usuario->setSenha( $dados['senha'] );

	} else {

		$verificacao = Utilitarios::senhaValida($_POST['senha']);

		if($verificacao) {

			/* Caso contrário, se o usuário digitou alguma coisa

		no campo senha, precisaremos verificar o que foi digitado */

		$usuario->setSenha(  

			$usuario->verificaSenha($_POST['senha'], $dados['senha']));

		} else {

			header('location:cadastro_atualiza.php?formato_de_senha_inválido');

		}

		

		

	}



  // Se o campo imagem estiver vazio, então significa que o usuário NÃO QUER TROCAR DE IMAGEM. Ou seja, vamos manter a imagem existente

  if(empty($_FILES['perfil']['name'])) {

	$usuario->setPerfil($_POST['perfil-existente']);

} else {

	// Senão, então, pegamos a referência (nome e extensão) da nova imagem e fazemos o processo de upload e envio desta referência para o objeto (usando o setter)

	 // vamos excluir

	 $arquivo = "../fotos_de_perfil/".$_SESSION['perfil'];

	 if($_SESSION['perfil'] !== "provisorio/user.png") { 
	 if(unlink($arquivo)){
		echo "Arquivo excluído com sucesso.";
	  }
	  else{
		echo "Não foi possível excluir o arquivo.";
	  }}

	    $usuario->uploadAtualiza($_FILES['perfil']);

        $usuario->setPerfil($_FILES['perfil'] ['name']);

}

	

	// Função atualiza perfil, para atualizar dados gerais de cadastro da tabela usuario

	$usuario->atualizarPerfil();



	// Função que irá destruir a sessão atual e encaminhar para o arquivo perfil_valida.php, onde será feito uma nova validação e criado uma nova sessão

	header('location:freela_valida.php');

	}

}

?>





<!--criando formulario de cadastro -->

<div class="container col-md-12 col-sm-10 marketing shadow rounded">

		<div class="row justify-content-center featurette my-5 ">

        <h1 class="ps-5 pt-2 py-2 cta-formulario-atualiza">Atualize seus dados</h1>

			<div class="col-12 col-lg-8 col-sm-12    ">

			

			

				<form enctype="multipart/form-data" class="formulario-atualiza form-horizontal bg-form  p-sm-5 p-5 my-1 rounded" action="" method="POST">



				<!-- Campo de inserção de imagem -->

				<div class="border-shadow img-vazia "><img src="../fotos_de_perfil/<?=$_SESSION['perfil']?>" id="img"

					alt="" class="d-block mx-auto mb-3  perfil_freela_atualiza" width="150" height="170">	

				</div>

			<!-- Fim campo de inserção de imagem -->

					

				<div class="form-group mt-2">

						<label for="nome">Nome</label>

						<input type="text" class="form-control" id="nome" value="<?=$dados['nome']?>" name="nome" placeholder="Nome" required>

					</div>



					<div class="form-group pb-3  mt-4">

						<label for="email" class="pb-1">Email</label>

						<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?=$dados['email']?>">

					</div>

                   

					<div class="form-group  mt-2">

						<label for="senha" class="pb-1">Senha</label>

						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">

					</div>



					<div class="mt-4 pb-3">

                <label for="imagem-existente" class="form-label">Foto de perfil:</label>

                <!-- campo somente leitura, meramente informativo -->

                <input class="form-control" value="<?=$dados['perfil']?>" type="text" id="imagem-existente" name="perfil-existente" readonly>

            	</div>



            <div class="mb-3">

                <label for="imagem" class="form-label">Caso queira mudar, selecione outra imagem:</label>

                <input class="form-control" type="file" name="perfil" accept="image/png, image/jpeg, image/gif, image/svg+xml" id="upload">

            </div>



					



			<div class="container form-check-reverse pe-0">

				<div class="d-flex justify-content-lg-end justify-content-center gap-4 d-md-block ">

				<button class=" botao_inserir btn text-white" name="atualizar" id="atualizar" type="submit">ATUALIZAR</button>

				<button class="botao_excluir btn  text-white" id="excluir" type="submit"><a href="confirma_exclui.php" class="excluir">EXCLUIR</a></button>

				</div>

				</form>



				

			</div>

		</div>

	</div>

<script src="js/confirm.js"></script>

<script src="../js/bootstrap.bundle.js"></script>

</body>

</html>

<?php  ob_end_flush();  ?>