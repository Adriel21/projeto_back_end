<?php
ob_start();


use Projeto\Usuario;


require "vendor/autoload.php";

if(isset($_GET['campos_obrigatorios'])) {
	$feedback = 'Você deve preencher todos os campos <i class="bi bi-exclamation-octagon"></i>';
} else if (isset($_GET['nao_encontrado'])) {
	$feedback = 'Email informado não está cadastrado <i class="bi bi-exclamation-octagon"></i>';
} else if (isset($_GET['dados_incorretos'])) {
	$feedback = 'Dados informados estão incorretos <i class="bi bi-exclamation-octagon"></i>';
}


?>

<?php require_once 'inc/headerValidacao.php' ?>

	<div class="container marketing shadow shadow-lg">
		<div class="row featurette my-5 p-sm-5">
			<?php if(isset($feedback)){?>
				<p class="my-2 alert alert-warning text-center">
					<?=$feedback?>
				</p>
      		  <?php } ?>
			<div class="col-md-6 d-none d-lg-block pt-5">
			
                    <h2 class="text-start titulo_login">Juntos, podemos fazer mais!</h2>
                    <p class="text-start">Realize o login para uma melhor experiência.</p>
					<img class="d-flex w-50 m-auto" src="img/img-mexendo-no-celular.png">
			</div>

			<div class="col-12 col-lg-6 p-sm-3 p-4">
				<form class="form-horizontal shadow-lg bg-form shadow p-sm-5 p-3 rounded" action="" method="POST">
					<div class="form-group mt-2">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
					</div>

                    
                     <!-- 2 column grid layout for inline styling -->
                    <div class="row mt-2">
                        <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <!-- <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                            <label class="form-check-label" for="form2Example34"> Lembrar senha </label>
                        </div> -->
                        </div>

                      
                    </div>

          
                    <div class="d-grid gap-2 text-center">
					    <button type="submit" class="botao_index btn mt-3" name="recuperar">Recuperar</button>
                        <a href="cadastro.php">Não possui cadastro? Cadastre-se</a>
                    </div>
				</form>
			</div>
		</div>
	</div>

	<?php
		if (isset($_POST['recuperar'])){
            if (empty($_POST['email'])){
                header("location:recuperasenha.php?campo_obrigatorio");
            } else {
              // Buscando um usuário no banco de dados para fazer o login 
              $usuario = new Usuario;
                $usuario->setEmail($_POST['email']);
              $dados = $usuario->buscar();
                if (!$dados)	{
                    header ("location:recuperasenha.php?nao_encontrado");
                } else {
                $usuario->setId($dados['id']);
                $recuperar = $usuario->novaSenha();
            
                // var_dump($recuperar);
                // die();
            
            
                $recuperaEmail = $_POST['email'];

                $to = $recuperaEmail;
                $subject = 'Teste de envio de email';
                $message = 'Olá, sua nova senha é' . $recuperar;
                $headers = 'From: colajob@sunioweb.com.br';

                mail($to, $subject, $message, $headers);

                }
            }
        }
            
                ob_flush();
            
            ?>
		
			
	
		</body>