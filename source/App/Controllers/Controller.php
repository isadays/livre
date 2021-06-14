<?php


namespace Source\App\Controllers;

use CoffeeCode\Optimizer\Optimizer;
use CoffeeCode\Router\Router;
use League\Plates\Engine;

/**
 * Class Controller
 * @package Source\App\Controllers
 */
abstract class Controller
{
    /**
     * @var Engine
     */
    protected $view;

    /**
     * @var Router
     */
    protected $router;

    /**
     * @var Optimizer
     */
    protected $seo;

    public function __construct($router)
    {
        $this->router = $router;
        $this->view = Engine::create(__DIR__ . "/../../Views/pages", "php");
        $this->view->addData(["router" => $this->$router]);
    }
}