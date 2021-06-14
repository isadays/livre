<?php  $v->layout("_theme")?>
<!--Login-->
<section>
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <a href="<?= url()?>"><img id="logo" src="<?= url("source/Views/assets/img/livre_logo.png")?>"></a>
        </div>
        <div class="mt-3 d-flex justify-content-center">
            <h4>Bem-vindo de volta!</h4>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-white shadow p-4">
                    <form action="" method="POST" class="row g-3">
                        <p><strong>Já possui uma conta?</strong> Preencha para continuar.</p>
                        <div class="col-12">
                            <label>Email</label>
                            <input type="text" name="username" class="form-control" placeholder="email">
                        </div>
                        <div class="col-12">
                            <label>Senha</label>
                            <input type="password" name="password" class="form-control" placeholder="senha">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Lembrar de mim</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <a class="float-begin" href="#">Esqueci a senha!</a>
                            <button type="submit" class="btn btn-success float-end">Login</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p id="registro" class="text-center mb-0">Ainda não tem uma conta? <a href="register.php">Cadastre-se!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>