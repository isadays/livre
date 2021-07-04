<?php $v->layout("_theme") ?>

<?php $v->start("sidebar"); ?>
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?= url("source/Views/assets/img/sidebar-1.jpg") ?>">
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
        Tip 2: you can also add an image using data-image tag
    -->
        <div class="logo text-center"><a href="#">
                <img style="max-width: 100px" src="<?= url("source/Views/assets/img/livre_logo.png") ?>" alt="Logo Livre">
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item active  ">
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
                <li class="nav-item ">
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
                    <a class="navbar-brand" href="javascript:;">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
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
                            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                            <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <?php $v->end(); ?>
        <!-- End Navbar -->

        <!-- Cards Dashboard -->
        <div class="container content">
            <div class="row mt-5">
                <div class="card">
                    <div class="card-header card-header-text card-header-warning">
                        <div class="card-text">
                            <h4 class="card-title">Livros para Doar</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2>2</h2>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header card-header-text card-header-success">
                        <div class="card-text">
                            <h4 class="card-title">Livros Doados</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2>1</h2>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header card-header-text card-header-info">
                        <div class="card-text">
                            <h4 class="card-title">Livros Solicitados</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <h2>1</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <h3>
                Meus livros
            </h3>
            <table class="table ">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Nome do Livro</th>
                        <th>Situação</th>
                        <th>Quantidade</th>
                        <th class="text-right">Data de Publicação</th>
                        <th class="text-right">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>Branco é a Cor Mais Fina</td>
                        <td>Doado</td>
                        <td>1</td>
                        <td class="text-right">21/05/2021</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-info btn-round">
                                <i class="material-icons">person</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">2</td>
                        <td>Uma Mulher Na Escuridão</td>
                        <td>Doando</td>
                        <td>1</td>
                        <td class="text-right">23/05/2021</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-info btn-round">
                                <i class="material-icons">person</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">3</td>
                        <td>Neuro Marketing</td>
                        <td>Doado</td>
                        <td>1</td>
                        <td class="text-right">21/06/2021</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-info btn-simple btn-round">
                                <i class="material-icons">person</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-success btn-simple btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-danger btn-simple btn-round">
                                <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">4</td>
                        <td>A Vida Perfeita Não Existe</td>
                        <td>Solicitado</td>
                        <td>1</td>
                        <td class="text-right">21/06/2021</td>
                        <td class="td-actions text-right">
                            <button type="button" rel="tooltip" class="btn btn-info btn-round">
                                <i class="material-icons">person</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-success btn-round">
                                <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" class="btn btn-danger btn-round">
                                <i class="material-icons">close</i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>