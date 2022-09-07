<?php

require_once '../inc/headerInterno.php';

use Projeto\ControleDeAcesso;
use Projeto\Projeto;
use Projeto\Usuario;

$sessao = new ControleDeAcesso;
$projeto = new Projeto;
$projeto->usuario->setId($_SESSION['id']);
$listaDeProjetos = $projeto->listarDetalhes();
$usuario = new Usuario;
$usuario->setId($_SESSION['id']);
$dados = $usuario->listarUm();


?>


<!-- Menu Lado direito -->


<main class="container">
    <section class="main-body">
    
         
          <!-- /Breadcrumb -->
          <div class="row ">
            <div class="col-lg-4 col-sm-12 col-md-9 mb-3 mx-auto">
              <div class="card ">
                <div class="card-body ">
                  <div class="d-flex flex-column align-items-center text-center flex-lg-row text-lg-start justify-content-center gap-lg-2">
                    <img src="../fotos_de_perfil/<?=$_SESSION['perfil']?>" alt="Admin" class="rounded-circle" width="100">
                    <div class="mt-2 mt-lg-3">
                      <h4><?=$_SESSION['nome']?> Bezerra</h4>
                      <button button class="rounded-3 botao_perfil py-1 px-5 my-1 border-none fs-6" type="button">
                                Publicar Projeto
                            </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mt-3 shadow">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="text-center"><i class="bi bi-browser-chrome fs-4"></i> Website</h6>
                    <span class="text-secondary"><?=$_SESSION['email']?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="text-center"><i class="bi bi-linkedin fs-4"></i> linkdin</h6>
                    <span class="text-secondary">https://www.linkedin.com/in/</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="text-center"><i class="bi bi-instagram fs-4"></i> Instagram</h6>
                    <span class="text-secondary"><a>https://www.linkedin.com/in</a></span>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-9 mx-auto col-lg-8">
              <div class="card mb-3 shadow">
                <div class="card-body">
                    <div class="team-single-text padding-50px-left sm-no-padding-left">
        
        <div class="col-12 px-md-1 mt-2">
                  <div class="list-group">
                    <h2 class="text-center text-lg-start">Meus Projetos</h2>
                      <div class="list-group-item list-group-item-action">
                        <h4 class="text-center text-lg-start">Título: </h4>
                          <span class="text-center text-lg-start"><strong>Data:</strong> 25/08/2022</span>
                          <p class="text-center text-lg-start"><strong>Resumo do projeto:</strong></p>
                          <div class="text-lg-end text-center"><button class=" px-5 py-1 mt-2 botao_painel rounded-3" type="button"><a href="./detalhes_do_projeto.php?">Visualizar projeto</a></button></div>
                      </div>
                  </div>
              </div>

                        <div class="contact-info-section margin-40px-tb">
                            <ul class="list-style9 no-margin">

                                <li>

                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-mobile-alt text-purple"></i>
                                            <strong class="margin-10px-left xs-margin-four-left text-purple">Phone:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>(+44) 123 456 789</p>
                                        </div>
                                    </div>

                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-envelope text-pink"></i>
                                            <strong class="margin-10px-left xs-margin-four-left text-pink">Email:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p><a href="javascript:void(0)">addyour@emailhere</a></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>
          </div>

    </section>
</main>
        

                    