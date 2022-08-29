<?php

use Projeto\ControleDeAcesso;
use Projeto\Projeto;
use Projeto\Usuario;

require_once './vendor/autoload.php';
 require_once './inc/cabecalho_admin.php'; 
$sessao = new ControleDeAcesso;
$usuario = new Usuario;
$usuario->setId($_SESSION['id']);
$dadosFreela = $usuario->listarFreela();

var_dump($dadosFreela);
// if ($_SESSION['id'] == $dados['usuario_id']) {
//   echo 'alo';
// } else {
//   echo 'não';
// }

// DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
// date_default_timezone_set('America/Sao_Paulo');
// // CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
//     $dataLocal = date('d/m/Y', time());

    // echo $dataLocal;

?>


  <main class="my-4">

  <!-- Desktop Table perfil lateral -->
    <aside class="text-center d-lg-block d-none">
      <section class="perfil pt-3 pb-3 mb-4">
        <img src="./imagem/<?=$_SESSION['perfil']?>" alt="" width="150">
            <p><strong><?=$_SESSION['nome']?></strong></p>

            <!-- estrelas -->
            <ul class="avaliacao d-flex">
              <li class="star-icon ativo" data-avaliacao="1"></li>
              <li class="star-icon" data-avaliacao="2"></li>
              <li class="star-icon" data-avaliacao="3"></li>
              <li class="star-icon" data-avaliacao="4"></li>
              <li class="star-icon" data-avaliacao="5"></li>
            </ul>
            <!-- Final estrelas -->

            <div class="d-grid gap-2 col-6 mx-auto">
              <button class="botao-perfil rounded-3" type="button">Editar Perfil</button>
              <button class="botao-perfil rounded-3" type="button">Encontrar Projetos</button>
            </div>

            <hr>
           <h2><?=$dadosFreela['titulo']?></h2>
          <!-- <p class="contador"></p> -->
      </section>
    </aside>
  <!-- Desktop Table -->

<!-- --------------------------------------------------------------------------------- -->


  <!-- Mobile Table -->
    <section class="text-center d-lg-none">

        <!-- Perfil mobile-->
          <section class="perfil pt-3 pb-3 mb-4">
            <img src="./imagem/<?=$_SESSION['perfil']?>" alt="" width="150">
              <p><strong><?=$_SESSION['nome']?></strong></p>
              
            <div class="d-grid gap-2 col-6 mx-auto">
              <button class="botao-perfil rounded-3" type="button">Editar Perfil</button>
              <button class="botao-perfil rounded-3" type="button">Encontrar novos projetos</button>
            </div>
              
              <hr>
              <h2>
                <?=$dadosFreela['titulo']?>
              </h2>
          </section>
        <!-- Perfil mobile -->

      <!-- --------------------------------------------------------------------------------- -->


      <!-- Conteudo Mobile -->
        <section class="projetos pt-3 pb-4">
          <h1>Meus Projetos</h1>
              <div class="py-14 bg-primary rounded m-2">
                <div class="container">
                  <div class="row">
                    <div class="offset-lg-2 col-lg-8 col-md-12 col-12 text-center p-1">
                      <span class="fs-4 text-warning ls-md text-uppercase
                        fw-semi-bold">get things done

                      </span>
                      <!-- heading  -->
                      <h2 class="display-3 mt-4 mb-3 text-white fw-bold">Just try it out! You’ll
                        fall in love</h2>
                        <!-- para  -->
                      <p class="lead text-white-50 px-lg-8 mb-6">Designed for modern
                        companies looking to launch
                        a simple, premium and modern website and apps.</p>
                      <a href="#" class="btn btn-primary">Try For Free</a>
                    </div>
                  </div>
                </div>
              </div>


              <hr>
                
              <div class="ls-custom-select d-flex gap-4 align-items-center">
                    <p class="mt-3">Filtrar por categoria:</p>
                <select class="ls-select">
                    <option value="1">Todos Projetos</option>
                    <option value="2">Web, Software & Mobile</option>
                    <option value="3"> Opção 3 </option>
                    <option value="4"> Opção 4 </option>
                </select>
            </div>
            
           
                <div class="col-12 px-md-1 mt-2">
                    <div class="list-group">
                          <div class="list-group-item list-group-item-action">
                            <h4 class="">Título:</h4>
                              <span><strong>Data:</strong> 25/08/2022</span>
                              <p><strong>Resumo do projeto:</strong> </p>
                          <div class="d-flex justify-content-center">
                            <button class="botao-perfil rounded-3 px-5" type="button">Visualizar projeto</button>
                          </div>
                        </div>
                    </div>
                </div>
                    
        </section>
          <!-- Conteudo mobile -->

    </section>

    <section class="projetos_desktop pt-3 pb-2 float-end d-none d-lg-block px-2">
            <h1>Meus Projetos</h1>
              <div class="py-14 bg-primary rounded">
                <div class="container">
                  <div class="row">
                    <div class="offset-lg-2 col-lg-8 col-md-12 col-12 text-center p-1">
                      <span class="fs-4 text-warning ls-md text-uppercase
                        fw-semi-bold">get things done

                      </span>
                      <!-- heading  -->
                      <h2 class="display-3 mt-4 mb-3 text-white fw-bold">Just try it out! You’ll
                        fall in love</h2>
                        <!-- para  -->
                      <p class="lead text-white-50 px-lg-8 mb-6">Designed for modern
                        companies looking to launch
                        a simple, premium and modern website and apps.</p>
                      <a href="#" class="btn btn-primary">Try For Free</a>
                    </div>
                  </div>
                </div>
              </div>


              <hr>
                
              <div class="ls-custom-select d-flex gap-4 align-items-center">
                    <p class="mt-3">Filtrar por categoria:</p>
                <select class="ls-select">
                    <option value="1">Todos Projetos</option>
                    <option value="2">Web, Software & Mobile</option>
                    <option value="3"> Opção 3 </option>
                    <option value="4"> Opção 4 </option>
                </select>
            </div>
            
          
                <div class="col-12 px-md-1 mt-2">
                    <div class="list-group">
                          <div class="list-group-item list-group-item-action">
                            <h4 class="">Título: </h4>
                              <span><strong>Data:</strong> 25/08/2022</span>
                              <p><strong>Resumo do projeto:</strong> </p>
                          <div class="d-flex justify-content-center">
                            <button class="botao-perfil rounded-3 px-5" type="button">Visualizar projeto</button>
                          </div>
                        </div>
                    </div>
                </div>
                      
      </section>
    <!-- Mobile Table -->   
  </main>

  <footer class="bg-marinho-footer text-center text-white mt-5">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1 fs-5" href="#!" role="button"><i class="bi bi-instagram"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1 fs-5" href="#!" role="button"><i class="bi bi-twitter"></i></a>
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">

      <p class="copyright">
        © 2022 Copyright:<a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </p>
      
      <p class="copyright">
        <a class="text-white" href="https://mdbootstrap.com/">Politica de Privacidade</a>
      </p>
    </div>
    <!-- Copyright -->
  </footer>

  <script type="text/javascript" src="./js/estrelas.js"></script>