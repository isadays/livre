<?php $v->layout("_theme") ?>
<div class="bg-gradient-main">
    <div class="row">
        <div class="col">
            <h1 class="text-white text-main">
                Nossa missão é ajudar você<br>
                encontrar ou doar<br>
                <spam class="livros-destaque">Livros</spam>
            </h1>
            <div class="row">
                <div class="col">
                    <p class="par-main">Aqui você pode dar uma nova vida ao seus livro!</p>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary btn-home">
                        Crie uma conta grátis
                    </button>
                </div>
            </div>
        </div>
        <div class="col hero">
            <img src="<?= url("source/Views/assets/img/hero-home.svg") ?>" alt="">
        </div>
    </div>
</div>
<div class="content-main">
    <div class="row">
        <div class="col">
            <img class="img-hero" src="<?= url("source/Views/assets/img/books.png") ?>" alt="">
        </div>
        <div class="col">
            <div class="find-books">
                <h2><b>
                        Não tem condições de comprar vários livros?
                        Aqui você encontra vários sendo doados!
                    </b>
                </h2>
                <button type="button" class="btn btn-primary btn-home">
                    Ver livros disponíveis
                </button>
            </div>
        </div>
    </div>
</div>

<div class="content-main">
    <h1 class="text-center"><b>Contato</b></h1>
    <div class="container">
        <div class="card shadow p-5">
            <form action="action_page.php">

                <label for="fname">Nome</label>
                <input type="text" id="name" name="name" placeholder="Seu nome...">

                <label for="assunto">Assunto</label>
                <input type="text" id="assunto" name="assunto" placeholder="Assunto do contato...">


                <label for="message">Mensagem</label>
                <textarea id="message" name="message" placeholder="Digite sua mensagem..." style="height:200px"></textarea>

                <input type="submit" value="Enviar">

            </form>
        </div>
    </div>

</div>