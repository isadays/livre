<?php
require_once '/Applications/XAMPP/xamppfiles/htdocs/livre/App/View/login.php';
// Autenticação 
if (isset($_POST["btnCadastrese"])){
    include_once '/Applications/XAMPP/xamppfiles/htdocs/livre/App/View/register.php';
} else{
    if (isset($_POST["btnLogin"])) {
        include_once '/Applications/XAMPP/xamppfiles/htdocs/livre/App/Controller/UsuarioController.php';
        $uControler = new UsuarioController();
        if ($uControler->login($_POST['username'],$_POST['password'])){
            include_once '/Applications/XAMPP/xamppfiles/htdocs/livre/App/View/login.php';
        }
        else
        {
            include_once '/Applications/XAMPP/xamppfiles/htdocs/livre/App/View/cadastroNaoRealizado.php';
        }
    } 


}

?>
