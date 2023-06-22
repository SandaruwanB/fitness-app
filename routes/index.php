<?php

    class Router{

        protected $handeld = false;
        public function __construct(){}

        public function get($route, $view){
            $url = $_SERVER['REQUEST_URI'];
            if($_SERVER['REQUEST_METHOD'] !== 'GET'){
                return false;
            }
            if($url === $route){
                $this->handeld = true;
                return include_once(views . $view);
            }
        }

        public function post($route, $view){
            $url = $_SERVER['REQUEST_URI'];
            if($_SERVER['REQUEST_METHOD'] !== 'POST'){
                return false;
            }
            if($url === $route){
                $this->handeld = true;
                return include_once(views . $view);
            }
        }

        function __destruct(){
            if(!$this->handeld){
                return include_once(views . '404.html');
            }
        }
        
    }