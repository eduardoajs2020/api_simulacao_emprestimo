<?php

class HomeController {
    public function index() {
        echo "Hello World!";
    }

    public function about() {
        echo "About Us!";
    }
}

$homeController = new HomeController();
$router->get('/', [$homeController, 'index']);
$router->get('/about', [$homeController, 'about']);
