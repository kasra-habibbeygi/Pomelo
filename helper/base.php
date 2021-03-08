<?php

    defined("DB_HOST")
        or die;

    abstract class Base {

        private $dblink = null;

        // connect to db
        public function __construct(){

            $this -> dblink = mysqli_connect(DB_HOST , DB_USERNAME , DB_PASSWORD)
                or die(mysqli_connect_error());

            mysqli_select_db($this -> dblink , DB_NAME)
                or die($this -> getError());

                $this -> query("SET NAMES 'UTF-8'");

        }

        // disconect form db
        public function __destruct(){

            if(is_resource($this -> dblink))
                mysqli_close($this -> dblink);

        }

        // get db conection error
        public function getError(){

            return mysqli_connect_error($this -> dblink);

        }

        // query object
        public function query($q){

            $result = mysqli_query($this -> dblink , $q);

            if(stristr($q , 'INSERT'))
                return mysqli_insert_id($this ->dblink);

            else if(stristr($q , 'UPDATE') || stristr($q , 'DELETE'))
                return   mysqli_affected_rows($this -> dblink);
            
            else 
                return $result;

        }

        // redirect
        public function redirect($url){

            header("location:$url");
            die;

        }

        // get method
        public function safeGet($val){

            return isset($_GET[$val]) ? htmlentities(trim($_GET[$val]) , ENT_QUOTES , 'UTF-8') : '' ;
            
        }

        // post method
        public function safePost($val){

            return isset($_POST[$val]) ? htmlentities(trim($_POST[$val]) , ENT_QUOTES , 'UTF-8') : '' ;
            
        }

    }

?>