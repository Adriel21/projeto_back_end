<?php

use Projeto\Cliente;
use Projeto\ControleDeAcesso;
use Projeto\Freelancer;

require "./vendor/autoload.php";
?>



<!-- // Mensagens de feedback relacionados ao acesso
if(isset($_GET['acesso_proibido']) ){
	$feedback = 'Você deve logar primeiro! <span style="color: red"><i class="bi bi-x-circle-fill"></i></span>';
} else if (isset($_GET['campos_obrigatorios'])) {
	$feedback = 'Você deve preencher todos os campos <i class="bi bi-exclamation-octagon"></i>';
}  else if(isset($_GET['nao_encontrado'])) {
	$feedback = 'O email informado não está cadastrado';
} else if(isset($_GET['senha_incorreta'])) {
	$feedback = 'A senha informada está incorreta <span style="color: red"><i class="bi bi-x-circle-fill"></i></span>';
} else if(isset($_GET['logout'])) {
	$feedback = 'Você saiu o sistema';
}
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

	<title>Document</title>
</head>
<body>
	

<div class="row">
    <div class="bg-white rounded shadow col-12 my-1 py-4">
        <h2 class="text-center fw-light">Acesso à área administrativa</h2>

        <form action="" method="post" id="form-login" name="form-login" class="mx-auto w-50">

                <?php if(isset($feedback)){?>
				<p class="my-2 alert alert-warning text-center">
					<?=$feedback?>
				</p>
                <?php } ?>

				<div class="mb-3">
					<label for="email" class="form-label">E-mail:</label>
					<input class="form-control" type="email" id="email" name="email">
				</div>
				<div class="mb-3">
					<label for="senha" class="form-label">Senha:</label>
					<input class="form-control" type="password" id="senha" name="senha">
				</div>

				<div class="mb-3">
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
            </div>

				<button class="btn btn-primary btn-lg" name="entrar" type="submit">Entrar</button>

			</form>


		<?php
		if(isset($_POST['entrar'])){
			//Verificação de campos do formulário
			if(empty($_POST['email']) || empty($_POST['senha'])){
				header("location:login.php?campos_obrigatorios");
			} else {
				if($_POST['tipo'] == Cliente::$tipo) {
					$cliente = new Cliente;
					$cliente->setEmail($_POST['email']);
	
					// Buscando um usuário no banco a partir do e-mail
					$dados = $cliente->buscar();
				} else if ($_POST['tipo'] == Freelancer::$tipo) {
					$freelancer = new Freelancer;
					$freelancer->setEmail($_POST['email']);
	
					// Buscando um usuário no banco a partir do e-mail
					$dados = $freelancer->buscar();
				}
				// Capturamos o email informado
			

				//if($dados === false){ - Se dados for false(ou seja, não tem dados de nenhum usuário cadastrado)
				if(!$dados) {
					//echo "Não tem ninguém nessa bagaça!";
					header("location:login.php?nao_encontrado");
				} else {
					// Verificação da senha e login
					if(password_verify($_POST['senha'], $dados['senha']) ) {
						$sessao = new ControleDeAcesso;
						$sessao->login($dados['id'], $dados['nome']);
						echo 'Deu certo';
					} else {
						header("location:login.php?senha_incorreta");
					}
				}
				
				// Utilitarios::dump($dados);
			}
		}
		?>
    </div>
    
    
</div>        
        
        
</body>
</html>