<?php
include_once '../App/View/login.php';

// Autenticação 
if (isset($_POST["btnCadastro"])){
    include_once 'App/View/register.php';
} else{
    if (isset($_POST["btnLogin"])) {
        require_once '../Controller/UsuarioController.php';

        $uControler = new UsuarioController();

        if ($uControler->login($_POST['username'],$_POST['password'])){
            include_once 'App/View/login.php';
        }
        else
        {
            include_once 'App/View/cadastroNaoRealizado.php';
        }
    } else
    {
        if (isset($_POST["btnCadastrar"])) {
            require_once 'App/Controller/UsuarioController.php';
            $uController = new UsuarioController();

    }

}
}

?>
