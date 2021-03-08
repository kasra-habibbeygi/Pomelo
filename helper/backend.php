<?php

    defined("DB_HOST")
        or die;

    class Backend extends Base {

        // check login authentication
        public function checkLogin(){

            if(isset($_SESSION['admin_id']))
                return true;

            else    
                return false;

        }
      
    }

?>