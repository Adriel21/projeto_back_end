<?php

use Projeto\Categoria;
use Projeto\Freelancer;

require_once './vendor/autoload.php';
$freelancer = new Freelancer;
$categoria = new Categoria;
$listaDeCategorias = $categoria->listar();
$freelancer->setId($_GET['id']);
$dados = $freelancer->listarUm();

if(isset($_POST['atualizar'])) {
    $freelancer->setNome($_POST['nome']);
    $freelancer->setEmail($_POST['email']);
    $freelancer->setProfissao($_POST['profissao']);
    $freelancer->setCategoriaId($_POST['categoria']);
    $freelancer->setPerfil($_POST['perfil']);
    if(empty($_POST['perfil'])) {
        $freelancer->setPerfil($dados['perfil']);
     } else {
        $freelancer->setPerfil($_POST['perfil']);
     }

    if(empty($_POST['senha'])) {
        $freelancer->setSenha($dados['senha']);
    } else {
        $freelancer->setSenha(  
			$freelancer->verificaSenha($_POST['senha'], $dados['senha'])
		);
    }
    
    $freelancer->atualizarCadastro();
    header('location:freelancer.php');
}

echo $dados['senha'];
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
				<label class="form-label" for="senha">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha" placeholder="Preencha apenas se for alterar">
			</div>

            
            <div class="mb-3">
				<label class="form-label" for="nome">Profissão:</label>
				<input class="form-control" type="text" id="nome" value="<?=$dados['profissao']?>" name="profissao" required>
			</div>

            <div class="mb-3">
                <label class="form-label" for="imagem" class="form-label">Selecione uma imagem:</label>
                <input class="form-control" type="file" id="imagem" name="perfil"
                accept="image/png, image/jpeg, image/gif, image/svg+xml">
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



			
			<button class="btn btn-primary" name="atualizar"><i class="bi bi-arrow-clockwise"></i> Atualizar</button>
		</form>
		
	</article>
</div>

