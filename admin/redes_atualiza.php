<?php
ob_start();

use Projeto\Categoria;
use Projeto\ControleDeAcesso;
use Projeto\Rede;

require_once '../inc/headerInterno.php';
$validacao = $_GET['perfil'];
$sessao = new ControleDeAcesso;

$categoria = new Categoria;
$listaDeCategorias = $categoria->listar();

$rede = new Rede;
$rede->setUsuarioId($_SESSION['id']);
$redes = $rede->listarUm();
if(isset($_POST['atualizar'])) {
    if($validacao === "freelancer") {
        $rede = new Rede;
        $rede->setWebsite($_POST['website']);
        $rede->setLinkedin($_POST['linkedin']);
        $rede->setInstagram($_POST['instagram']);
        $rede->setGithub($_POST['github']);
        $rede->setBehance($_POST['behance']);
        $rede->setUsuarioId($_SESSION['id']);
    } else if($validacao === "cliente"){
        $rede = new Rede;
        $rede->setWebsite($_POST['website']);
        $rede->setLinkedin($_POST['linkedin']);
        $rede->setInstagram($_POST['instagram']);
        $rede->setUsuarioId($_SESSION['id']);
    }
    


    // header("location:login.php");

    if(isset($_SESSION['usuario_id']) and $validacao === "freelancer"){
        $rede->atualizarPerfilCompleto();
    } else {
        $rede->atualizarPerfil();
    }


    if($validacao === "cliente") { 
        header('location:dashboard_cliente.php?id=' . $_SESSION['id']);
        } else {
        header('location:dashboard_freelancer.php?id=' . $_SESSION['id']);
        }

}

?>



<!--criando formulario de cadastro -->
<div class="container col-md-12 col-sm-12 marketing shadow rounded">
		<div class="row justify-content-center featurette my-5 p-sm-5">
        <h1 class="ps-5 pt-2 py-2 cta-formulario-atualiza">Atualizar redes</h1>
			<div class="col-12 col-md-8 col-sm-12  p-sm-4 p-4 ">
				<form enctype="multipart/form-data" class="formulario-atualiza form-horizontal bg-form  p-sm-5 p-5 my-1 rounded" action="" method="POST">
                <?php  if($validacao == "cliente"){ ?>
                <div class="form-group pb-3 mt-2">
						<label for="website" class="pb-1">Website</label>
						<div class="input-group">
                            <div class="input-group-text bg-transparent aleatorio"><i class="bi bi-browser-chrome"></i></div>
                             <input type="text" class="form-control" id="inputPassword4" placeholder="https://www.exemplo.com" name="website"  value="<?=$redes['website']?>">
                        </div>
					</div>

					<div class="form-group pb-3  mt-2">
						<label for="linkedin" class="pb-1">Linkedin</label>
						<div class="input-group">
                            <div class="input-group-text bg-transparent aleatorio"><i class="bi bi-linkedin"></i></div>
                             <input type="text" class="form-control" id="inputPassword4" placeholder="https://www.linkedin.com/in/usuario-bba342852" name="linkedin" value="<?=$redes['linkedin']?>">
                        </div> 
					</div>
                 

                    <div class="form-group pb-3 mt-2">
						<label for="website" class="pb-1">Instagram</label>
						<div class="input-group">
                            <div class="input-group-text bg-transparent aleatorio"><i class="bi bi-instagram"></i></div>
                             <input type="text" class="form-control" id="inputPassword4" placeholder="https://www.instagram.com/usuario/" name="instagram"  value="<?=$redes['instagram']?>">
                        </div>
					</div>
                    <?php } else { ?> 

                        <div class="form-group pb-3 mt-2">
						<label for="website" class="pb-1">Website</label>
						<div class="input-group">
                            <div class="input-group-text bg-transparent aleatorio"><i class="bi bi-browser-chrome"></i></div>
                             <input type="text" class="form-control" id="inputPassword4" placeholder="https://www.exemplo.com" name="website"  value="<?=$redes['website']?>">
                        </div>
					</div>

					<div class="form-group pb-3  mt-2">
						<label for="linkedin" class="pb-1">Linkedin</label>
						<div class="input-group">
                            <div class="input-group-text bg-transparent aleatorio"><i class="bi bi-linkedin"></i></div>
                             <input type="text" class="form-control" id="inputPassword4" placeholder="https://www.linkedin.com/in/usuario-bba342852" name="linkedin" value="<?=$redes['linkedin']?>">
                        </div> 
					</div>
                 

                    <div class="form-group pb-3 mt-2">
						<label for="website" class="pb-1">Instagram</label>
						<div class="input-group">
                            <div class="input-group-text bg-transparent aleatorio"><i class="bi bi-instagram"></i></div>
                             <input type="text" class="form-control" id="inputPassword4" placeholder="https://www.instagram.com/usuario/" name="instagram"  value="<?=$redes['instagram']?>">
                        </div>
					</div>
                    
                    <div class="form-group pb-3 mt-2">
						<label for="website" class="pb-1">Github</label>
						<div class="input-group">
                            <div class="input-group-text bg-transparent aleatorio"><i class="bi bi-github"></i></div>
                             <input type="text" class="form-control" id="inputPassword4" placeholder="https://github.com/exemplo" name="github"  value="<?=$redes['github']?>">
                        </div>
					</div>

                    <div class="form-group pb-3 mt-2">
						<label for="website" class="pb-1">Behance</label>
						<div class="input-group">
                            <div class="input-group-text bg-transparent aleatorio"><i class="bi bi-behance"></i></div>
                             <input type="text" class="form-control" id="inputPassword4" placeholder="https://www.behance.net/exemplo" name="behance"  value="<?=$redes['behance']?>">
                        </div>
					</div>
                    <?php } ?>
					
					<div class="pt-4 text-end">
                    <button class="botao_inserir btn text-white" id="inserir" name="atualizar" type="submit">ATUALIZAR</button>
                    </div>
				</form>
			</div>
		</div>
	</div>

					
<script src="../js/bootstrap.bundle.min.js"></script>					
<?php ob_flush() ?>