<?php


    class Connection{

        public function __construct(){
            echo "Working";
        }

        function getRequiredValues(){
            $env = parse_ini_file('.env');
            $config = array(["database" => $env['DB_NAME'], "dbuser" => $env['DB_USER'], "dbpassword" => $env['DB_PASSWORD'], "dbserver" => $env['DB_SERVER']]);
            //return $config;
            //print_r($config);
            echo "called";
        }

        public function getConnection(){
            getRequiredValues();
        }

    }