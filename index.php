<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

/*
 *  Controllers
 * */
$router->namespace("Source\App\Controllers");

/*
 * HOME
 * */
$router->group(null);
$router->get("/", "WebController:home", "web.home");
$router->get("/registrar", "WebController:register", "web.register");
$router->get("/login", "WebController:login", "web.login");


/*
 * USER
 * */
$router->group("user");
$router->get("/", "UserController:dashboard", "user.dashboard");
$router->get("/editar/perfil", "UserController:edit", "user.edit");
$router->get("/encontrar/livros", "UserController:find", "user.find");
$router->get("/novo/livro", "UserController:new", "user.create");
$router->get("/econtrar/livros/{id}/{title}", "UserController:getBook", "user.create");
$router->get("/notificacoes", "UserController:notifications", "user.notifications");

/*
 * ERRORS
 * */
$router->group("ooops");
$router->get("/{errcode}","WebController:error" );


/*
 *  ROUTING
 * */
$router->dispatch();

/*
 * ERRORS REDIRECT
 * */
if($router->error()){
    $router->redirect("/ooops/{$router->error()}");
}