<?php

    require_once __DIR__.'/core/__init.php';
    require_once __DIR__.'/routes/index.php';

    $router = new Router();

    $router->get('/', 'index.php');
    $router->get('/about', 'about.php');
    $router->get('/contact', 'contact.php');
    $router->get('/auth', 'login.php');
    $router->get('/admin/home', 'admin/index.php');
    $router->get('/admin/users', 'admin/users.php');
    $router->post('/contact');
    $router->post('/auth');
    $router->post('/admin/users');