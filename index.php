<?php 
require_once 'inc/header.php'
?>

<main class="container-md-fluid marketing">

    <!-- Primeiro Blaco -->
    <section class="container row my-5 py-3 m-auto flex-column-reverse flex-lg-row">
            
            <div class="col-xl-6 col-lg-6 col-md-12 my-auto">
                <h1 class="display-4 fw-bold pe-lg-8">Encontre projetos, amplie sua rede e gere renda extra.</h1>
                    <!-- text -->
                    <p class="mb-4 lead">
                        Com a Colajob, você poderá encontrar muitos projetos que irão contribuir para o seu bolso e para ampliar seu portfólio. Aproveite a oportunidade e, veja se há algum que se encaixa com você!
                    </p>

                <div class="d-grid gap-2 col-8 col-md-6 col-lg-6 mt-5 rounded">
                    <a href="projetos.php"><button class="botao_index btn me-md-2 w-100 p-2 px-4" type="button">Procurar Projetos</button></a>
                </div>
            </div>

    
          <!-- img -->
        <picture class="col-xl-6 col-lg-6 col-md-12 text-lg-end text-center pt-1">
          <img class="img-responsive m-auto" src="img/img-pessoas-sinalizando.png" alt="" width="100%" height="100%">
        </picture>
    </section>
    <!-- Primeiro finalizado -->

    <!-- Segundo Bloco -->
    <section class="segna-bloco py-2" style="background-color: #0421B5;">
        <section class="container row featurette my-5 py-3 m-auto flex-column-reverse flex-lg-row-reverse">
            <div class="col-xl-6 col-lg-6 col-md-12 m-auto">
                <h2 class="text-white display-4 fw-bold pe-lg-8">Profissionais diversos prontos para te ajudar.</h2>
                    <!-- text -->
                    <p class="text-white mb-4 lead">
                        Precisando de ajuda qualificada? Está no lugar certo. Na Colajob você pode conseguir quanta ajuda for necessária para concluir seus projetos.
                    </p>

                    <div class="d-grid gap-1 col-8 col-md-6 col-lg-6 mt-5 rounded">
                        <a href="freelancers.php"><button class="botao_index btn me-md-2 w-100 p-2 px-4" type="button">Procurar Freelancers</button></a>
                    </div>
            </div>
              <!-- img -->
            <picture class="col-xl-6 col-lg-6 col-md-12 text-lg-end text-center pt-1">
              <img class="img-responsive m-auto" src="img/img-pessoas-olhando-celular.png" alt="" width="100%" height="100%">
            </picture>
        </section>
    </section>
    <!-- Final  Segundo bloco -->

    <!-- cards Projetos -->

    <section class="mt-5">
        <h2 class="display-4 fw-bold pe-lg-8 text-center">Você pode encontrar aqui!</h2>
            <section class="container row row-cols-1 row-cols-md-3 g-4 m-auto mt-3 mb-5">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body h-100">
                            <h5 class="card-title fw-semibold">Desenvolvedores</h5>
                            <img class="card-img-top mb-3" src="img/cards_index/desenvolvedores.jpg" alt="">
                            <p class="card-text">Aqui, você pode encontrar a ajuda necessária para desenvolver seu site ou aplicativo.</p>
                            <a href="freelancers.php?id=1"><button class="botao_index btn me-md-2" type="button">Ver Freelancers</button></a>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body h-100">
                            <h5 class="card-title fw-semibold">Designers</h5>
                            <img class="card-img-top mb-2" src="img/cards_index/designers.jpg" alt="">
                            <p class="card-text">Encontre designers incriveis para construirem a identidade que você deseja.</p>
                            <a href="freelancers.php?id=2"><button class="botao_index btn me-md-2" type="button">Ver Freelancers</button></a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body h-100">
                            <h5 class="card-title fw-semibold">Redatores</h5>
                            <img class="card-img-top mb-2" src="img/cards_index/redatores.jpg" alt="">
                            <p class="card-text">Precisando de alguém que elabore conteúdo para você? Que tal buscar um redator?</p>
                            <a href="freelancers.php?id=5"><button class="botao_index btn me-md-2" type="button">Ver Freelancers</button></a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body h-100">
                            <h5 class="card-title fw-semibold">Fotógrafos</h5>
                            <img class="card-img-top mb-2" src="img/cards_index/fotografos.jpg" alt="">
                            <p class="card-text">Um bom fotógrafo pode te auxiliar a registrar momentos importantes da sua vida.</p>
                            <a href="freelancers.php?id=7"><button class="botao_index btn me-md-2" type="button">Ver Freelancers</button></a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body h-100">
                            <h5 class="card-title fw-semibold">Consultores</h5>
                            <img class="card-img-top mb-2" src="img/cards_index/consultores.jpg" alt="">
                            <p class="card-text">Uma boa consultoria pode ajudar o seu negócio a alcançar o objetivo que deseja.</p>
                            <a href="freelancers.php?id=6"><button class="botao_index btn me-md-2" type="button">Ver Freelancers</button></a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <div class="card-body h-100">
                            <h5 class="card-title fw-semibold">Professores</h5>
                            <img class="card-img-top mb-2" src="img/cards_index/professores.jpg" alt="">
                            <p class="card-text">Gostaria de algumas aulas de reforço? Que tal encontrar um professor para te ajudar?</p>
                            <a href="freelancers.php?id=4"><button class="botao_index btn me-md-2" type="button">Ver Freelancers</button></a>
                        </div>
                    </div>
                </div>
            </section>
    </section>

  
</main>
   
<section class="segna-bloco py-1 px-3" style="background-color: #0421B5;">
        <section class="container row featurette my-5 py-3 m-auto">
            <!-- row -->
            <div class="row align-items-center g-0 flex-column-reverse flex-lg-row">
                <div class="col-xl-6 col-lg-6 col-md-12 m-auto">
                    <!-- heading -->
                    <div>
                        <h1 class="text-white display-4 fw-bold pe-lg-8">Acreditamos na transformação da tecnologia.</h1>
                        <!-- text -->
                        <p class="text-white mb-4 lead">
                          Objetivamos ajudar pessoas a terem a oportunidade de atuarem de uma das formas que mais vem crescendo ultimamente - como Freelancers.
                        </p>
        
                    </div>
                </div>
                <!-- img -->
                <picture class="col-xl-6 col-lg-6 col-md-12 text-lg-end text-center pt-1">
                    <img class="img-responsive m-auto" src="img/img-equipe-conversando.png" alt="" width="100%" height="100%">
                </picture>
            </div>
        </section>
    </section>




<?php require_once 'inc/footer_externo.php'; ?>