<?php
    class Router{
        
        protected $handeld = false;
        public function __construct(){}

        private function getDBConnection(){
            $server = "localhost";
            $user = "root";
            $password = "Sanda@12";
            $database = "fitness";
            
            return mysqli_connect($server, $user, $password, $database);
        }

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

        public function post($route){
            $url = $_SERVER['REQUEST_URI'];
            if($_SERVER['REQUEST_METHOD'] !== 'POST'){
                return false;
            }
            if($url === $route){
                $this->handeld = true;
                $con = self::getDBConnection();
                if($url == '/contact'){
                    self::storeContactData($con);
                }
                else if($url == '/auth'){
                    self::signIn($con);
                }
            }
        }



        function __destruct(){
            if(!$this->handeld){
                return include_once(views . '404.php');
            }
        }


        private function storeContactData ($con){
            $name = $_POST['name'];
            $web = $_POST['web'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $query = mysqli_query($con, "INSERT INTO contacts(name, email, web, message) VALUES('".$name."', '".$email."', '".$web."', '".$message."')");
            if($query){
                echo "success";
            }
        }

        private function signIn($con){
            $user = $_POST['user'];
            $password = $_POST['password'];

            $query = mysqli_query($con, "SELECT * FROM users WHERE username='".$user."'");
            if(mysqli_num_rows($query) > 0){
                $row = mysqli_fetch_assoc($query);
                if(password_verify($password, $row['password'])){
                    session_start();
                    $_SESSION['user'] = $user;
                    echo 'success';
                }
                else{
                    echo 'pass';
                }
            }
            else{
                echo "nouser";
            }
        }
    }