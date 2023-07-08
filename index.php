<?php

    require_once __DIR__.'/core/__init.php';
    require_once __DIR__.'/routes/index.php';

    $router = new Router();

    $router->get('/', 'index.html');
    $router->get('/about', 'about.html');
    $router->get('/contact', 'contact.php');
    $router->post('/contact', 'contact.php');