<?php

    defined('DB_HOST')
        or die;

    abstract class Base{

        private $dblink = null;

        public function __construct(){

            $this -> dblink = mysqli_connect(DB_HOST , DB_USERNAME , DB_PASSWORD)
                or die(mysqli_connect_error());

            mysqli_select_db($this -> dblink , DB_NAME)
                or die(mysqli_connect_error($this -> dblink));

            $this -> query("SET NAMES 'UTF-8'");

        }

        public function __destruct(){
            
            if(is_resource($this -> dblink))
                mysqli_close($this -> dblink);

        }

        public function query($val){

            $result = mysqli_query($this -> dblink , $val);

            if(strstr($val  , 'INSERT'))
                return mysqli_insert_id($this -> dblink );

            else if(strstr($val , 'DELETE') || strstr($val , 'UPDATE'))
                return mysqli_affected_rows($this -> dblink );

            else
                return $result;
            
        }

        public function safeGet($val){

            return isset($_GET[$val]) ? htmlentities(trim($_GET[$val]) , ENT_QUOTES , 'UTF-8') : '';

        }

        public function safePost($val){

            return isset($_POST[$val]) ? htmlentities(trim($_POST[$val]) , ENT_QUOTES , 'UTF-8') : '';

        }

        public function safePassword($val){
            
            return sha1(md5(base64_encode($val)));
            
        }

        public function freeResult($result){

            return mysqli_free_result($result); 

        }

        public function redirect($val){

            return header("location:$val");

        }

        public function validEmail($val){

            return filter_var($val , FILTER_VALIDATE_EMAIL);

        }

    }

?>