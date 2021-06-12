<?php

if(!isset($_SESSION)){
    session_start();
}

class UsuarioController
{
    public function inserir($nome, $email, $celular, $senha) {
        require_once '/Applications/XAMPP/xamppfiles/htdocs/livre/App/Model/Usuario.php';
        $usuario = new Usuario();
        $usuario->setNome($nome);
        $usuario->setEmail($email);
        $usuario->setCelular($celular);
        $usuario->setSenha($senha);

        $r = $usuario->inserirBD();
        $_SESSION['usuario'] = serialize($usuario);
        return $r;
    }
    public function login($email, $senha)
    {
        require_once '/Applications/XAMPP/xamppfiles/htdocs/livre/App/Model/Usuario.php';
        $usuario = new Usuario();
        $usuario->carregarUsuario($email);
        if ($usuario->getSenha() == $senha) {
            $_SESSION['usuario'] = serialize($usuario);
            $_SESSION['password'] = serialize($senha);
            return true;
        } else {
            return false;
        }
    }

}