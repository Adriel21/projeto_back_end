<?php 
require_once 'inc/cabecalho_externo.php'
 
?>

    <!-- Primeiro destaque -->
    <section class="container my-5 justify-content-center">
        <picture class="d-flex justify-content-center">
            <source media="(min-width:650px)" srcset="img/img-projetando.png">
              
            <img class="d-flex w-75 m-auto" src="img/img-projetando.png" alt="banner tudo o que você precisa esta aqui">
        </picture>

        <div class="align-center p-3 text-center">
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
    </section>
    <!-- Final Primeiro destaque -->

    <!-- Segunda destaque -->
    <section class="container-flex">
        <img class="d-flex w-75 m-auto" src="img/img-equip-desenvolvendo.png" alt="banner tudo o que você precisa esta aqui">

        <article class="align-center p-3 text-center bg-info pt-5 img-dois-avatar">
            <h2>
                Comece agora!
            </h2>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>
        
            <button class="btn btn-sm btn-marinho mt-3 px-5 fs-5 align-center bold-button rounded-pill" type="button">Saiba +</button>
        </article>
    </section>
    <!-- Final segundo destaque -->

    <!-- Cards  -->
    <section class="container" id="teste">
        <div class="row m-1">

            <h2 class="text-center my-5">Encontre Freelancers</h2>

            <div class="col-6 col-lg-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-laptop mx-2"></i>Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-info rounded-pill">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-info rounded-pill">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-laptop mx-2"></i>Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-info rounded-pill">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-info rounded-pill">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bi bi-laptop mx-2"></i>Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-info rounded-pill">Go somewhere</a>
                    </div>
                </div>
            </div>

            <div class="col-6 col-lg-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-info rounded-pill">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Final cards -->

   <?php require_once 'inc/footer_externo.php'; ?>