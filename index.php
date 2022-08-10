<?php 
require_once 'inc/cabecalho_externo.php'
 
?>

    <!-- Primeiro destaque desktop/mobile -->
    
    <section class="container my-5 justify-content-center media-break-point sm">

        <picture class="d-md-none justify-content-center">
            <p> 
               <img class="d-flex w-75 m-auto" src="img/img-projetando.png" alt="banner tudo o que você precisa esta aqui">
           </p>
        </picture>

    <main class="container text-center">
  
        <div class="row align-items-center ">

            <section class="col d-none d-md-block d-print-block ">
                <h1>Comece agora!</h1>
                <h3>Com apenas um clique</h3>
                <button type="submit">Clica-ae</button>
            </section>
        
        <section class="col d-none d-md-block d-print-block ">
            <p><img src="img/img-job-anotacao.png" alt=""></p>
        </section>
    </div>
  
    </main>
    <!-- Fim do primeiro destaque desktop/mobile -->

    

    
    <!-- Segundo destaque Mobile -->
        <div class="align-center p-3 text-center d-md-none">
            <h1>
                Lorem ipsum dolor sit amet.
            </h1>

            <h2>
                Ola mundo
            </h2>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium nesciunt aliquam atque similique inventore quibusdam, consequuntur esse unde rem quae ducimus distinctio nostrum ad rerum.
            </p>
        
            <button class="btn btn-sm btn-info mt-3 px-5 fs-5 align-center bold-button rounded-pill" type="button">Começa agora!</button>
        </div>
    <!-- Fim segundo destaque Mobile -->


        <!-- Inicio segundo destaque desktop  -->

    <section class="container text-center">

        <div class="row align-items-center ">
            <div class="row">
                <div class="col align-self-center d-none d-md-block d-print-block ">
                    <p><img src="img/img-equip-desenvolvendo.png" alt="Equipe desenvolvendo"></p>
                </div>
        
                <div class="col align-self-start d-none d-md-block d-print-block ">
                    <h1>Call To Action</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem velit quam, hic vero expedita rerum. Quibusdam consectetur temporibus omnis natus.</p>
                    <button type="submit">Clica-ae</button>
                </div>
            </div>
        </div>     
    </section>

    <!-- Final segundo destaque desktop/mobile -->

    <!-- Terceiro destaque mobile/desktop-->
    <section class="container-flex w-100">


        <img class="d-md-none d-flex w-75 m-auto" src="img/img-equip-desenvolvendo.png" alt="banner tudo o que você precisa esta aqui">

        <article class="d-md-none align-center p-3 text-center bg-info pt-5 ">
            <h2>
                Encontre freelancers!
            </h2>
    
        </article>
    </section>
    <!-- Fim terceiro destaque mobile/desktop -->

    <!-- Cards  -->
    <section class="container content-center text-center" id="">
        <div class="row m-1">

            <h2 class="text-center my-5">Encontre Freelancers</h2>

            <div class="card col-6 col-lg-4 mb-2" style="width: 18rem;">
                <img src="img/img-notebook-cima-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Programação</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>

            <div class="card col-6 col-lg-4 mb-2" style="width: 18rem;">
                <img src="img/img-mulher-designer.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Design</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>

            <div class="card col-6 col-lg-4 mb-2" style="width: 18rem;">
                <img src="img/img-programadora-de-costas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Segurança da Informação</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>

            <div class="card col-6 col-lg-4 mb-2" style="width: 18rem;">
                <img src="img/img-seguranca-informacao.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ciência de dados</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>

            <div class="card col-6 col-lg-4 mb-2" style="width: 18rem;">
                <img src="img/img-equipe.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Coordenação de Equipe</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
            </div>

            <div class="card col-6 col-lg-4 mb-2" style="width: 18rem;">
            <img src="img/img-contadora.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Finanças</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>

        </div>
    </section>
    <!-- Final cards -->

   <?php require_once 'inc/footer_externo.php'; ?>

    <footer class="container-flex bg-footer">

    <div class="container text-center bg-footer">
  <div class="row">
    <div class="col">
      <ul>
          <li><a href="#">Como fazer um portfólio</a></li>
          <li><a href="#">Conte conosco</a></li>
          <li><a href="#">Sobre-nós</a></li>
      </ul>
    </div>
    <div class="col">
     <p><img class="d-flex w-75 m-auto" src="img/img-job-anotacao.png" alt="banner tudo o que você precisa esta aqui"></p>
    </div>
    <div class="col">
    <ul>
          <li><a href="#">Turbine seu projeto</a></li>
          <li><a href="#">Resolva seus problemas</a></li>
          <li><a href="#">Suporte Técnico</a></li>
      </ul>
    </div>
  </div>
</div>
        

        
</body>
</html>

