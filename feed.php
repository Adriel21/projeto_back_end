<?php

use Projeto\Usuario;




require_once './inc/cabecalho-cadastro.php';
?>
<!-- Cabeçalho inicio -->
<nav class="navbar navbar-expand-lg navbar-light bg-light pb-3">
    <div class="container cabecalho-interno">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<!-- Cabeçalho fim -->


<!-- Menu Lado direito -->
<div class="container">

    <div class="container-fluid overflow-hidden">
        <div class="row vh-100 overflow-auto">
            <div class="col-12 col-sm-3 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top">
                <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
                    <a href="#" class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5">Cola<span class="d-none d-sm-inline">job</span></span>
                    </a>
                    <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-sm-0 px-2">
                                <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-sm-0 px-2">
                                <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">Orders</span></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle px-sm-0 px-1" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-5 bi-bootstrap"></i><span class="ms-1 d-none d-sm-inline">Bootstrap</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdown">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-sm-0 px-2">
                                <i class="fs-5 bi-grid"></i><span class="ms-1 d-none d-sm-inline">Products</span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-sm-0 px-2">
                                <i class="fs-5 bi-people"></i><span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>

                    <!-- Parte inferior do menu -->
                    <div class="dropdown py-sm-3 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="28" height="28" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Joe</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                    <!-- Fim parte inferior menu -->

                </div>
            </div>
<!-- Fim do menu lado direito -->

            <div class="col d-flex flex-column h-sm-100">
                <main class="row overflow-auto ps-5">
                    <div class="col pt-4 ">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Vaga de emprego que paga mau</h5>
                                <small class="text-muted">3 days ago</small>
                            </div>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsa cumque illo aperiam, esse doloremque natus minus dolore, quod, ipsam quibusdam quia quis vero suscipit hic porro et. Nihil, quae.</p>
                            <small class="text-muted">And some muted small print.</small>
                            <div class="col pt-4">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Vaga de emprego que paga mau</h5>
                                        <small class="text-muted">3 days ago</small>
                                    </div>
                                    <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsa cumque illo aperiam, esse doloremque natus minus dolore, quod, ipsam quibusdam quia quis vero suscipit hic porro et. Nihil, quae.</p>
                                    <small class="text-muted">And some muted small print.</small>

                                    <div class="col pt-4">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h5 class="mb-1">Vaga de emprego que paga mau</h5>
                                                <small class="text-muted">3 days ago</small>
                                            </div>
                                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsa cumque illo aperiam, esse doloremque natus minus dolore, quod, ipsam quibusdam quia quis vero suscipit hic porro et. Nihil, quae.</p>
                                            <small class="text-muted">And some muted small print.</small>

                                            <div class="col pt-4">
                                                <a href="#" class="list-group-item list-group-item-action">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-1">Vaga de emprego que paga mau</h5>
                                                        <small class="text-muted">3 days ago</small>
                                                    </div>
                                                    <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsa cumque illo aperiam, esse doloremque natus minus dolore, quod, ipsam quibusdam quia quis vero suscipit hic porro et. Nihil, quae.</p>
                                                    <small class="text-muted">And some muted small print.</small>

                                                    <div class="col pt-4">
                                                        <a href="#" class="list-group-item list-group-item-action">
                                                            <div class="d-flex w-100 justify-content-between">
                                                                <h5 class="mb-1">Vaga de emprego que paga mau</h5>
                                                                <small class="text-muted">3 days ago</small>
                                                            </div>
                                                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsa cumque illo aperiam, esse doloremque natus minus dolore, quod, ipsam quibusdam quia quis vero suscipit hic porro et. Nihil, quae.</p>
                                                            <small class="text-muted">And some muted small print.</small>

                                                            <div class="col pt-4">
                                                                <a href="#" class="list-group-item list-group-item-action">
                                                                    <div class="d-flex w-100 justify-content-between">
                                                                        <h5 class="mb-1">Vaga de emprego que paga mau</h5>
                                                                        <small class="text-muted">3 days ago</small>
                                                                    </div>
                                                                    <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsa cumque illo aperiam, esse doloremque natus minus dolore, quod, ipsam quibusdam quia quis vero suscipit hic porro et. Nihil, quae.</p>
                                                                    <small class="text-muted">And some muted small print.</small>

                                                                    <div class="col pt-4">
                                                                <a href="#" class="list-group-item list-group-item-action">
                                                                    <div class="d-flex w-100 justify-content-between">
                                                                        <h5 class="mb-1">Vaga de emprego que paga mau</h5>
                                                                        <small class="text-muted">3 days ago</small>
                                                                    </div>
                                                                    <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsa cumque illo aperiam, esse doloremque natus minus dolore, quod, ipsam quibusdam quia quis vero suscipit hic porro et. Nihil, quae.</p>
                                                                    <small class="text-muted">And some muted small print.</small>

                                                                    <div class="col pt-4">
                                                                <a href="#" class="list-group-item list-group-item-action">
                                                                    <div class="d-flex w-100 justify-content-between">
                                                                        <h5 class="mb-1">Vaga de emprego que paga mau</h5>
                                                                        <small class="text-muted">3 days ago</small>
                                                                    </div>
                                                                    <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ipsa cumque illo aperiam, esse doloremque natus minus dolore, quod, ipsam quibusdam quia quis vero suscipit hic porro et. Nihil, quae.</p>
                                                                    <small class="text-muted">And some muted small print.</small>

                                                                    <nav aria-label="Page navigation example">
                                                                        <ul class="pagination justify-content-end">
                                                                            <li class="page-item disabled">
                                                                                <a class="page-link">Previous</a>
                                                                            </li>
                                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                            <li class="page-item">
                                                                                <a class="page-link" href="#">Next</a>
                                                                            </li>
                                                                        </ul>
                                                                    </nav>

                </main>
                <footer class="row bg-light py-4 mt-auto">
                    <div class="col"> Footer content here... </div>
                </footer>
            </div>
        </div>
    </div>


</div>

</div>