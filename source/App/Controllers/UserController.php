<?php


namespace Source\App\Controllers;


use League\Plates\Engine;

/**
 * Class UserController
 * @package Source\App\Controllers
 */
class UserController
{
    /**
     * @var Engine
     */
    private Engine $view;

    /**
     * UserController constructor.
     */
    public function __construct()
    {
        $this->view = Engine::create(__DIR__ . "/../../Views/pages", "php");
    }

    public function dashboard() : void
    {
        echo $this->view->render("dashboard", [
            "title" => "DASHBOARD | " . SITE
        ]);
    }

    public function edit() : void
    {
        echo $this->view->render("edit_user", [
            "title" => "EDITAR PERFIL | " . SITE
        ]);
    }

    public function find() : void
    {
        echo $this->view->render("find_books", [
            "title" => "ENCONTRAR LIVROS | " . SITE
        ]);
    }

    public function new() : void
    {
        echo $this->view->render("new_book", [
            "title" => "NOVO LIVRO | " . SITE
        ]);
    }

    public function getBook() : void
    {
        echo $this->view->render("book", [
            "title" => "LIVRO | " . SITE
        ]);
    }

    public function notifications() : void
    {
        echo $this->view->render("notifications", [
            "title" => "NOTIFICAÇOES | " . SITE
        ]);
    }
}