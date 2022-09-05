<?php

use Projeto\Projeto;
use Projeto\Usuario;


require_once './vendor/autoload.php';
require_once './inc/cabecalho-cadastro.php';
$projeto = new Projeto;
$listaDeProjetos = $projeto->listarTodos();
?>


<!-- Menu Lado direito -->

<?php
    require_once './inc/cabecalho_admin.php'
?>

<main class="container">
    <section class="main-body">
    
         
          <!-- /Breadcrumb -->
          <div class="row">
            <div class="col-md-4 col-sm-12 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                      <p class="text-secondary mb-1">Full Stack Developer</p>
                      <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                      <button button class="rounded-3 py-1 px-5 my-1 border-none fs-6" type="button">
                                Atualizar cadastro
                            </button>
                            <button button class="rounded-3 py-1 px-5 my-1 border-none fs-6" type="button">
                                Atualizar perfil profissional
                            </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card mt-3 shadow">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="text-center"><i class="bi bi-browser-chrome fs-4"></i> Website</h6>
                    <span class="text-secondary">https://bootdey.com</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="text-center"><i class="bi bi-github fs-4"></i> Github</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="text-center"><i class="bi bi-linkedin fs-4"></i> linkdin</h6>
                    <span class="text-secondary">https://www.linkedin.com/in/</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="text-center"><i class="bi bi-instagram fs-4"></i> Instagram</h6>
                    <span class="text-secondary"><a>https://www.linkedin.com/in</a></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="text-center"><i class="bi bi-behance fs-4"></i> Behance</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-md-8">
              <div class="card mb-3 shadow">
                <div class="card-body">
                    <div class="team-single-text padding-50px-left sm-no-padding-left">
                        <h4 class="font-size38 sm-font-size32 xs-font-size30">Buckle Giarza</h4>
                        <p class="no-margin-bottom">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum voluptatem.</p>
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
        

                    

                

     
            
        


                        



            

               