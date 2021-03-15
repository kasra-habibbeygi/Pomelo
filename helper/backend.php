<?php

    defined("DB_HOST")
    or die;

    class Backend extends Base{

        public function checkLogIn(){

            if(isset($_SESSION['admin_user']))
                return true;

            else 
                return false;

        }

        public function logIn($email , $pass){

            

        }
        
    }

?>