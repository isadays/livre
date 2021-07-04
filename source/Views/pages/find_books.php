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
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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

        <!-- End Navbar -->
        <?php $v->end(); ?>
        <div class="container content">


            <div class="card card-nav-tabs card-plain">
                <div class="card-header card-header-primary">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#home" data-toggle="tab">Aventura</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#updates" data-toggle="tab">Ação</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#history" data-toggle="tab">Romance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#history" data-toggle="tab">Terror</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#history" data-toggle="tab">Auto Ajuda</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <!--    Área de cards dos livros-->
        <div class="mt-5 mt-5">
            <div class="card shadow-lg mt-5">
                <div class="row">
                    <div class="col-4 m-3">
                        <img src="https://imagens.lelivros.love/2017/12/Baixar-A-Aguia-Pousou-Jack-Higgins-em-Pdf-ePub-e-Mobi-ou-ler-online-174x270.jpg" style="width: 250px; height: 409px;">
                    </div>
                    <div class="col">

                        <div class="row"></div>
                        <div class="col">
                            <div class="card-title">
                                <div class="col mt-3 align-content-center">
                                    <h2>A Águia Pousou – Jack Higgins</h2>
                                </div>
                            </div>

                            <div class="</div>
                                <div class=" card-body">
                                <p>
                                    A águia pousou é o mais aclamado romance de Higgins. Ambientado na Segunda Guerra Mundial, trata de uma ousada conspiração nazista para seqüestrar o líder britânico Winston Churchill.
                                    . Este livro constitui uma tentativa de recriar os fatos que culminaram nessa espantosa façanha. Pelo menos cinqüenta por cento de seu conteúdo são historicamente documentados. Caberá ao leitor resolver por si mesmo quanto do resto é produto de especulação ou ficção. . . Baseado num fato historico documentado e numa imaginacao privilegiada, o autor compos neste livro uma das historias mais absorventes e curiosas da Segunda Guerra Mundial
                                </p>
                            </div>
                        </div>
                        <div class="card-footer p-2">
                            <button type="button" class="btn btn-success">Chamar no WhatsApp</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-lg mt-5">
                <div class="row">
                    <div class="col-4 m-3">
                        <img src="https://imagens.lelivros.love/2017/12/Baixar-Anjos-em-chamas-Bear-Grylls-em-Pdf-ePub-e-Mobi-ou-ler-online-174x270.jpg" style="width: 250px; height: 409px;">
                    </div>
                    <div class="col">

                        <div class="row"></div>
                        <div class="col">
                            <div class="card-title">
                                <div class="col mt-3 align-content-center">
                                    <h2>Anjos em chamas – Will Jaeger Vol 2 – Bear Grylls</h2>
                                </div>
                            </div>

                            <div class="</div>
                                <div class=" card-body">
                                <p>
                                    A sequência de Voo fantasma, best-seller do Sunday Times e uma bomba de adrenalina de tirar o fôlego
                                    Um cadáver pré-histórico sepultado dentro de uma geleira ártica, chorando lágrimas de sangue.
                                    Uma ilha invadida por primatas raivosos fugitivos de um laboratório de pesquisas classificado com o nível máximo de biossegurança.
                                    Um gigantesco hidroavião escondido debaixo de uma montanha, contendo uma sinistra carga nazista.
                                    Um órfão sequestrado de uma favela africana, tendo em mãos a chave para a salvação do planeta.
                                    Quatro viagens aterrorizantes. Um caminho intransponível.
                                    Só um homem capaz de atravessá-lo.
                                    Will Jaeger. O caçador.
                                </p>
                            </div>
                        </div>
                        <div class="card-footer p-2">
                            <button type="button" class="btn btn-success">Chamar no WhatsApp</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-lg mt-5">
                <div class="row">
                    <div class="col-4 m-3">
                        <img src="https://imagens.lelivros.love/2017/11/Baixar-Os-Humanos-Matt-Haig-em-Pdf-ePub-e-Mobi-ou-ler-online-370x555.jpg" style="width: 250px; height: 409px;">
                    </div>
                    <div class="col">

                        <div class="row"></div>
                        <div class="col">
                            <div class="card-title">
                                <div class="col mt-3 align-content-center">
                                    <h2>Os Humanos – Matt Haig</h2>
                                </div>
                            </div>

                            <div class="</div>
                                <div class=" card-body">
                                <p>
                                    Quando um visitante extraterrestre chega à Terra, suas primeiras impressões da espécie humana são pouco positivas. Ao assumir a forma do professor Andrew Martin, da Universidade de Cambridge, o visitante está ansioso por cumprir a tarefa macabra que lhe foi incumbida e voltar rapidamente para seu planeta. Ele se sente enojado pela aparência dos humanos, pelo que eles comem e por sua capacidade de matar e guerrear. Mas, à medida que o tempo passa, ele começa a perceber que pode haver mais coisas nessa espécie do que havia pensado. Disfarçado de Martin, ele cria laços com sua família e começa a ver esperança e beleza na imperfeição humana, o que o faz questionar a missão que o levou à Terra.
                                </p>
                            </div>
                        </div>
                        <div class="card-footer p-2">
                            <button type="button" class="btn btn-success">Chamar no WhatsApp</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-lg mt-5">
                <div class="row">
                    <div class="col-4 m-3">
                        <img src="https://imagens.lelivros.love/2016/11/Baixar-Livro-Cacadores-de-Obras-Primas-Robert-M.-Edsel-em-PDF-ePub-e-Mobi-ou-ler-online-370x532.jpg" style="width: 250px; height: 409px;">
                    </div>
                    <div class="col">

                        <div class="row"></div>
                        <div class="col">
                            <div class="card-title">
                                <div class="col mt-3 align-content-center">
                                    <h2>Caçadores de Obras Primas – Robert M. Edsel</h2>
                                </div>
                            </div>

                            <div class="</div>
                                <div class=" card-body">
                                <p>
                                    Uma história ainda pouco divulgada é resgatada por Robert M. Edsel em Caçadores de Obras-Primas. Trata-se do trabalho realizado pelos Monuments Man, soldados que tentaram dificultar ou impedir o “maior roubo da história” cometido por Hitler durante a Segunda Guerra Mundial. Estima-se que o Führer e seus homens tenham se apossado de mais de 5 milhões de objetos culturais. O objetivo era criar o maior acervo de obras-primas do mundo em terras alemãs.
                                </p>
                            </div>
                        </div>
                        <div class="card-footer p-2">
                            <button type="button" class="btn btn-success">Chamar no WhatsApp</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-lg mt-5">
                <div class="row">
                    <div class="col-4 m-3">
                        <img src="https://imagens.lelivros.love/2017/11/Baixar-Guardioes-da-Galaxia-Roccket-Raccoon-Groot-Dan-Abnett-em-Pdf-ePub-e-Mobi-ou-ler-online-370x555.jpg" style="width: 250px; height: 409px;">
                    </div>
                    <div class="col">

                        <div class="row"></div>
                        <div class="col">
                            <div class="card-title">
                                <div class="col mt-3 align-content-center">
                                    <h2>Guardiões da Galáxia – Roccket Raccoon & Groot – Dan Abnett</h2>
                                </div>
                            </div>

                            <div class="</div>
                                <div class=" card-body">
                                <p>
                                    Rocket e Groot nesta hilária e inédita aventura.Quando os poderosos Vingadores… Bem, eh, não, este livro não é sobre eles. Na verdade, este livro não é sobre ninguém lá muito famoso. Enfim.. Um guaxinim falante e uma árvore que anda entram em um bar…Sim, esta história vai começar assim. No momento não vamos falar de honra, de heroísmo ou sobre as mãos desconcertantemente humanas de Rocket Racoon. Vamos falar sobre um livro além do Universo, sobre uma narrativa incomum e, principalmente, sobre quanta flark pode acontecer quando você resolve se juntar a Rocket e Groot e sua vida desmorona, o Império Kree e a Tropa Nova querem sua cabeça e, acreditem ou não, tudo isso ainda pode ser o menor dos seus problemas.Acreditem em mim, sou um Gravador Rigelliano.
                                </p>
                            </div>
                        </div>
                        <div class="card-footer p-2">
                            <button type="button" class="btn btn-success">Chamar no WhatsApp</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>