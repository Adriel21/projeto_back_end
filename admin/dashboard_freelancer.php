<?php

ob_start();



require_once '../inc/headerInterno.php';



use Projeto\Rede;

use Projeto\Utilitarios;



$rede = new Rede;

$listaDeRedes = $rede->listarRedes();

$rede->setUsuarioId($_SESSION['id']);

foreach ($listaDeRedes as $teste){

  if(($teste['usuario_id'] === $_SESSION['id'])){

      $redes = $rede->listarUm();

  } 

}



$profissao->setUsuarioId($_SESSION['usuario_id']);

$listarFreela = $profissao->listarUm();





?>





<!-- Menu Lado direito -->





<main class="container">

    <section class="main-body">



          <div class="row">

            <div class="col-lg-5 col-sm-12 col-md-9 mb-3 mx-auto perfil">

              <div class="card ">

                <div class="card-body">

                  <div class="d-flex flex-column align-items-center text-center flex-lg-row text-lg-start justify-content-start gap-lg-2">

                    <!-- <img src="../fotos_de_perfil/" alt="Admin" class="perfil_freela_feed" width="100" height="100"> -->
                    <?php if(!isset($_SESSION['perfil'])) { ?>
                      
                    <img src="../fotos_de_perfil/provisorio/user.png" id="perfilEdit" class="perfil_freela_feed" alt="Admin" width="100" onmouseenter="testando()" onmouseout="testandoDois()">
  

                    <?php } else { ?>
                    <img src="../fotos_de_perfil/<?=$_SESSION['perfil']?>" id="teste" class="perfil_freela_feed" alt="Admin" width="100">
                    <?php } ?>

                    <div class="mt-2 mt-lg-3">

                      <h4 class="nome"><?=Utilitarios::limitaNome($_SESSION['nome'])?></h4>

                      <button button class="rounded-3 botao_perfil py-1 px-5 my-1 border-none fs-6" type="button">

                                <a href="freelancer_atualiza.php">Perfil Freelancer</a>

                            </button>

                    </div>

                  </div>

                </div>

              </div>





            <div class="card mt-3 shadow">

                <ul class="list-group list-group-flush">

                  <li class="list-group-item ">

                    <?php if(isset($redes)) { ?>

                    <h6 class="text-lg-start"><i class="bi bi-browser-chrome fs-4"></i> Website</h6>

                    <span class="text-secondary">

                        <?php if($redes['website'] == "") { ?>   

                         <p class="text-lg-start">https://www.exemplo.com.br</p>

                        <?php } else  { ?>

                        <p class="text-lg-start"><a href="<?=$redes['website']?>" class="text-lg-start" target="_blank"><?=Utilitarios::limitaCaractere($redes['website'])?></a></p>

                    </span>

                        <?php } ?>

                  </li>

                  <li class="list-group-item">

                    <h6 class="text-lg-start"><i class="bi bi-linkedin fs-4"></i> linkdin</h6>

                    <span class="text-secondary">

                    <?php if($redes['linkedin'] == "") { ?>   

                         <p class="text-lg-start">https://www.linkedin.com/in/exemplo-bba342852</p>

                        <?php } else  { ?>

                        <p class="text-lg-start"><a href="<?=$redes['linkedin']?>" class="text-center text-lg-start" target="_blank"><?=$redes['linkedin']?></a></p>

                    </span>

                        <?php } ?>

                  </li>

                  <li class="list-group-item">

                    <h6 class="text-lg-start"><i class="bi bi-instagram fs-4"></i> Instagram</h6>

                    <span class="text-secondary">

                      <?php if($redes['instagram'] == "") { ?>   

                         <p class="text-lg-start">https://www.instagram.com/exemplo/</p>

                        <?php } else  { ?>

                        <p class="text-lg-start"><a href="<?=$redes['instagram']?>" target="_blank"><?=$redes['instagram']?></a></p>

                            

                    </span>

                        <?php } ?>

                    </li>



                  <li class="list-group-item">

                      <h6 class="text-lg-start"><i class="bi bi-github fs-4"></i> Github</h6>

                    <span class="text-secondary">

                        <?php if($redes['github'] == "") { ?>   

                         <p class="text-lg-start">https://github.com/exemplo</p>

                        <?php } else  { ?>

                        <p class="text-lg-start"><a href="<?=$redes['github']?>" target="_blank"><?=$redes['github']?></a></p>

                            

                    </span>

                        <?php } ?>

                  </li>



                  <li class="list-group-item">

                      <h6 class="text-lg-start"><i class="bi bi-behance fs-4"></i> Behance</h6>

                    <span class="text-secondary">

                        <?php if($redes['behance'] == "") { ?>   

                         <p class="text-lg-start">https://www.behance.net/exemplo</p>

                        <?php } else  { ?>

                        <p class="text-lg-start"><a href="<?=$redes['behance']?>" target="_blank"><?=$redes['behance']?></a></p>

                            

                    </span>

                        <?php } ?>

                  </li>

      

                  <?php } else { ?>

                    <h6 class="text-lg-start"><i class="bi bi-browser-chrome fs-4 "></i> Website</h6>

                    <span class="text-secondary">

                        <p class="text-lg-start">https://www.exemplo.com.br</p>

                    </span>

                  </li>

                  <li class="list-group-item">

                    <h6 class="text-lg-start"><i class="bi bi-linkedin fs-4"></i> linkedin</h6>

                    <span class="text-secondary">

                        <p class="text-lg-start">https://www.linkedin.com/in/exemplo-bba342852</p>

                    </span>

                  </li>

                  <li class="list-group-item">

                    <h6 class="text-lg-start"><i class="bi bi-instagram fs-4"></i> Instagram</h6>

                    <span class="text-secondary">

                         <p class="text-lg-start">https://www.instagram.com/exemplo/</p></span>

                  </li>

                  <li class="list-group-item">

                    <h6 class="text-lg-start"><i class="bi bi-github fs-4"></i> Github</h6>

                    <span class="text-secondary">

                         <p class="text-lg-start">https://github.com/exemplo</p></span>

                  </li>

                  <li class="list-group-item">

                    <h6 class="text-lg-start"><i class="bi bi-behance fs-4"></i> Behance</h6>

                    <span class="text-secondary">

                         <p class="text-lg-start">https://www.behance.net/exemplo</p></span>

                  </li>

                  <?php } ?>

                  <li class="list-group-item text-start text-lg-end">

                  <?php if(isset($redes)) { ?>

                    <span class="text-secondary"><a href="redes_atualiza.php?perfil=freelancer">Editar redes</a></span>

                    <?php } else { ?>

                    <span class="text-secondary"><a href="redes_insere.php?perfil=freelancer">Inserir redes</a></span>

                    <?php } ?>

                  </li>

                </ul>

              </div>

            </div>



            <div class="col-md-9 mx-auto col-lg-7">

              <div class="card mb-3 shadow">

                <div class="card-body">

                    <div class="team-single-text padding-50px-left sm-no-padding-left">

                        <h4 class="font-size38 sm-font-size32 xs-font-size30 titulo_freelancer"><?=$listarFreela['titulo']?></h4>

                        <p class="no-margin-bottom"><?=$listarFreela['descricao']?></p>

                    </div>

                </div>

              </div>

          </div>



    </section>

</main>

        
<script src="../js/dashboard.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>

                    

<?php ob_flush() ?>

                



     

            

        





                        







            



               