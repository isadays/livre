<?php


namespace Source\App\Controllers;


use League\Plates\Engine;
use Source\App\Models\User;

class WebController
{
    private Engine $view;

    public function __construct()
    {
        $this->view = Engine::create(__DIR__ . "/../../Views/pages", "php");
    }


    public function home() : void
    {
        echo $this->view->render("home", [
            "title" => "Home | " . SITE
        ]);
    }


    public function login() : void
    {
        echo $this->view->render("login", [
            "title" => "Login | " . SITE
        ]);
    }

    public function register() : void
    {
        echo $this->view->render("register", [
            "title" => "Registro | " . SITE
        ]);
    }

    public function error(array $data) : void
    {
        echo "<h1>Erro {$data["errcode"]}</h1>";
    }
}