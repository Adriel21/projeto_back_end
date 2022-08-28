<?php

use Projeto\ControleDeAcesso;
use Projeto\Projeto;

require_once './vendor/autoload.php';
 require_once './inc/cabecalho_admin.php'; 
$sessao = new ControleDeAcesso;
$projeto = new Projeto;
$projeto->usuario->setId($_SESSION['id']);
$listaDeNoticias = $projeto->listarDetalhes();
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


<!-- <section aria-label="Seção de Perfil" class="text-center">
    <h2 class="text-center titulo-apresentacao">Bem-Vindo, Gabriel Genovez!</h2>
    
   

    


<div class="container div-anuncio">
  <div>
    <div class="py-5 text-center">
      <img style="border-radius: 50%;" class="d-block mx-auto mb-3 perfil" src="./img//gabriel_genovez.jfif" id="img"
        alt="" width="140" height="170"> -->
        <!-- <img src="./img//gabriel_genovez.jfif" class="rounded-circle d-block mx-auto mb-3" alt="..." width="160" height="170"> -->
      <!-- <img class="d-block mx-auto mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
      <!-- <button class="btn-marinho rounded-pill px-5 py-1 mt-2 bold-button" type="button">Gerenciar Perfil</button>
       -->
    <!-- </div>

    <div class="row g-5">
    <div class="col-md-5 col-lg-4 order-md-last">
    </section>

    <main>
      <h2 class="text-center titulo-projeto mb-5">Precisa de um Freelancer?<br>Então, <span>cadastre</span> seu projeto!</h2>
       <section class="section_principal d-lg-flex justify-content-around pb-lg-4 ">
        <section class="d-flex section_detalhes justify-content-center">
          <article class="metricaUm mt-4">
            <a href="">
              <div class="contador">5</div>
              <p >Projetos<br>Cadastrados</p>
            </a>
          </article>
        </section>
        <section class="d-flex section_detalhes justify-content-center ">
          <article class="metricaUm b-shadow mt-4">
            <a href="">
              <div class="contador">2</div>
              <p >Projetos<br>Concluídos</p>
            </a>
          </article>
        </section>
        <section class="d-flex section_detalhes justify-content-center">
          <article class="metricaUm b-shadow mt-4">
            <a href="">
              <div class="contador">2</div>
              <p >Projetos<br>Cancelados</p>
            </a>
          </article>
        </section>
      </section> 
       <div class="row">
  <div class="col-sm-4 metricaUm">
    <div class="card">
      <div class="card-body">
      <div class="contador">2</div>
        <p class="card-text text-center pt-4">Projetos Cadastrados</p>
        <a href="#" class="btn btn-primary">Visualizar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4 metricaUm">
    <div class="card">
      <div class="card-body">
      <div class="contador">2</div>
        <p class="card-text text-center pt-4">Projetos Concluídos</p>
        <a href="#" class="btn btn-primary">Visualizar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4 metricaUm">
    <div class="card">
      <div class="card-body">
      <div class="contador">2</div>
        <p class="card-text text-center pt-4">Projetos Finalizados</p>
        <a href="#" class="btn btn-primary">Visualizar</a>
      </div>
    </div>
  </div>
</div> -->
    <!-- </main> -->
<!-- 

    <section class="projetos-por-categoria mt-5 mt-lg-3 pb-4">

    <section class="projetos-por-categoria mt-5 pb-4 ps-2">

        <h3 class="text-center pt-2 mb-3 titulo-meus-projetos pb-2">Meus Projetos</h3>
      <div class="d-flex justify-content-center mb-2">
        <select name="categorias" id="" class="">
          <option value="" class="">Filtrar por categoria</option>
          <option value="" class="">Web, Software & Mobile</option> -->
        <!-- </select>
      </div> -->


      <!-- <div class="col-12 px-md-1 mt-4">
                <div class="list-group">
                    <a href="noticia.php" class="list-group-item list-group-item-action">
                    <h4 class="">Título: Desenvolvimento de aplicativo</h4>
      <span><strong>Data:</strong> 25/08/2022</span>
      <p><strong>Resumo do projeto:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequuntur sed illum repellendus aut perspiciatis maiores exercitationem labore nisi necessitatibus facilis ratione numquam eum voluptatibus, facere enim modi incidunt corrupti!</p>
      <div class="d-flex justify-content-center"><button class="btn-marinho rounded-pill px-5 py-1 mt-2 bold-button" type="button">Visualizar projeto</button></div> --> 

                   
                <!-- </div>
            </div>
      

      
    </section>  -->
   
    <main class="mt-4 mb-4">
      <section class="text-center d-lg-none">
        <section class="perfil pt-3 pb-3 mb-4">
          <img src="./imagem/<?=$_SESSION['perfil']?>" alt="" width="150">
          <p><strong><?=$_SESSION['nome']?></strong></p>
          <button class="botao-perfil rounded-pill ">Editar Perfil</button>
          <hr>
          <h2>Projetos Publicados:</h2>
          <p class="contador"><?=count($listaDeNoticias)?></p>
        
        </section>
        <section class="projetos pt-3 pb-4">
        <h1>Meus Projetos</h1>
        <hr>
        <div class="d-flex justify-content-center"><button class="rounded-pill btn-projeto px-5 py-1 mt-2" type="button"><a href="projeto_insere.php">Cadastrar Projeto</a></button></div>
        <hr>
        <div class="ls-custom-select d-flex gap-4 align-items-center justify-content-center">
        <p class="mt-3">Filtrar por categoria:</p>
    <select class="ls-select">
        <option value="1">Todos Projetos</option>
        <option value="2">Web, Software & Mobile</option>
        <option value="3"> Opção 3 </option>
        <option value="4"> Opção 4 </option>
    </select>
    </div>
        <div class="col-12 px-md-1 mt-4">
                  <div class="list-group">
                      <h4 class="">Título: </h4>
        <span><strong>Data:</strong> 25/08/2022</span>
        <p><strong>Resumo do projeto:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequuntur sed illum repellendus aut perspiciatis maiores exercitationem labore nisi necessitatibus facilis ratione numquam eum voluptatibus, facere enim modi incidunt corrupti!</p>
        <div class="d-flex justify-content-center"><button class="rounded-pill btn-projeto px-5 py-1 mt-2" type="button">Visualizar projeto</button></div>
                  </div>
              </div>
        </section>
        
      </section>
      

      
        <aside class="text-center d-lg-block d-none">
        <section class="perfil pt-3 pb-3 mb-4">
          <img src="./imagem/<?=$_SESSION['perfil']?>" alt="" width="150">
          <p><strong><?=$_SESSION['nome']?></strong></p>
          <button class="botao-perfil rounded-pill ">Editar Perfil</button>
          <hr>
          <h2>Projetos Publicados:</h2>
          <p class="contador"><?=count($listaDeNoticias)?></p>
        </section>
       
        
      </section>
        </aside>


        <section class="projetos_desktop pt-3 pb-2 float-end d-none d-lg-block ps-3 me-3">
          <h1 class="me-5">Meus Projetos</h1>
          <hr>
          <div class="d-flex justify-content-center"><button class="rounded-pill btn-projeto px-5 py-1 mt-2" type="button"><a href="freela_insere.php?id=<?=$_SESSION['id']?>">Cadastrar Projeto</a></button></div>
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
    <?php foreach ($listaDeNoticias as $noticia) {  ?> 
        <div class="col-12 px-md-1 mt-2">
                  <div class="list-group">
                      <div class="list-group-item list-group-item-action">
                        <h4 class="">Título: <?=$noticia['titulo']?></h4>
                          <span><strong>Data:</strong> 25/08/2022</span>
                          <p><strong>Resumo do projeto:</strong> <?=$noticia['resumo']?></p>
                          <div class="d-flex justify-content-center"><button class="rounded-pill btn-projeto px-5 py-1 mt-2" type="button">Visualizar projeto</button></div>
                      </div>
                  </div>
              </div>
              <?php } ?>
        </section>
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
    
