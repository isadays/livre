<?php $v->layout("_theme") ?>

<?php $v->start("sidebar"); ?>
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?= url("source/Views/assets/img/sidebar-1.jpg")?>">
        <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
-->
        <div class="logo text-center"><a href="#">
                <img style="max-width: 100px"
                     src="<?= url("source/Views/assets/img/livre_logo.png")?>"
                     alt="Logo Livre">
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= url("user") ?>">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= url("user/editar/perfil") ?>">
                        <i class="material-icons">person</i>
                        <p>Editar Perfil</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= url("user/encontrar/livros") ?>">
                        <i class="material-icons">content_paste</i>
                        <p>Encontrar Livros</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= url("user/novo/livro") ?>">
                        <i class="material-icons">library_books</i>
                        <p>Adicionar Livro</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?= url("user/notificacoes") ?>">
                        <i class="material-icons">notifications</i>
                        <p>Notificações</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Encontrar Livros</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">
                                <i class="material-icons">dashboard</i>
                                <p class="d-lg-none d-md-block">
                                    Stats
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="d-lg-none d-md-block">
                                    Some Actions
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                <a class="dropdown-item" href="#">Another Notification</a>
                                <a class="dropdown-item" href="#">Another One</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- End Navbar -->
        <?php $v->end(); ?>
        <div class="container content" xmlns:a="http://www.w3.org/1999/html">
            <div class="row">
                <!--    Lista de filtros-->
                <div class="col-3  mt-5">
                    <h3>Gênero</h3>
                    <ul>
                        <li>Drama</li>
                        <li>Drama</li>
                        <li>Drama</li>
                        <li>Drama</li>
                        <li>Drama</li>
                    </ul>
                </div>
                <!--    Área de cards dos livros-->
                <div class="col-9">
                    <div class="card shadow-lg mt-5">
                        <div class="row">
                            <div class="col-2 m-3">
                                <img src="../../Public/Img/livre_logo.png" class="card-img-top "
                                     style="max-width: 80px">
                            </div>

                            <div class="col">
                                <div class="card-title">
                                    <div class="col mt-3 align-content-center">
                                        <h2> A volta dos que não foram</h2>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad aliquid
                                        architecto atque corporis, deserunt eius illo ipsum laudantium magnam magni
                                        maiores neque nisi praesentium, sequi sint, ut. Asperiores, repellendus!</p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="m-3" href="#">Chamar no WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


