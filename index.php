<?php

    require_once __DIR__.'/core/__init.php';
    require_once __DIR__.'/routes/index.php';
    require_once __DIR__.'/controllers/UserController.php';

    $router = new Router();
    $user = new UserController();

    $router->get('/', 'index.html');
    $router->get('/home', 'home.php');