<?php require_once './inc/cabecalho_admin.php'; ?>


<section aria-label="Seção de Perfil" class="text-center">
    <h2 class="text-center titulo-apresentacao">Bem-Vindo, Maicon!</h2>
    
   

    


<div class="container div-anuncio">
  <div>
    <div class="py-5 text-center">
      <div class="border-shadow img-vazia container"><img src="img/img-projetando.png" id="img"
        alt="" class="img-vaziaa d-block mx-auto mb-3" width="140" height="170"></div>
      <!-- <img class="d-block mx-auto mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
      <button class="btn-marinho rounded-pill px-5 py-1 mt-2 bold-button" type="button">Gerenciar Perfil</button>
      
    </div>

    <div class="row g-5">
    <div class="col-md-5 col-lg-4 order-md-last">
    </section>

    <main>
      <h2 class="text-center titulo-projeto">Precisa de um Freelancer?<br>Então, <span>cadastre</span> seu projeto!</h2>
      <section class="d-flex justify-content-center">
        <article class="metricaUm mt-4"> 
          <a href="">
            <div class="contador">5</div>
            <p >Projetos<br>Cadastrados</p>
          </a>
        </article>
      </section>

      <section class="d-flex justify-content-center mt-5">
        <article class="metricaUm b-shadow"> 
          <a href="">
            <div class="contador">2</div>
            <p >Projetos<br>Concluídos</p>
          </a>
        </article>
      </section>

      <section class="d-flex justify-content-center mt-5">
        <article class="metricaUm b-shadow"> 
          <a href="">
            <div class="contador">2</div>
            <p >Projetos<br>Cancelados</p>
          </a>
        </article>
      </section>
    </main>

    <section class="projetos-por-categoria mt-5 pb-4">
        <h3 class="text-center pt-2 mb-3 titulo-meus-projetos pb-2">Meus Projetos</h3>
      <div class="d-flex justify-content-center">
        <select name="categorias" id="" class="">
          <option value="" class="">Filtrar por categoria</option>
          <option value="" class="">Web, Software & Mobile</option>
        </select>
      </div>
      
    </section>
<?php require_once './inc/footer_admin.php'; ?>