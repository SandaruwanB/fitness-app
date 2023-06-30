<?php


    class Connection{

        public function __construct(){
            echo "Working";
        }

        public function getConnection(){
            $env = file_get_contents('.env');
            echo $env['DB_NAME'];
        }

    }