<?php

    defined("DB_HOST")
        or die;

    class Backend extends Base{

        public function checkLogIn(){

            if(isset($_SESSION['admin_id']))
                return true;

            else 
                return false;

        }

        public function logIn($email , $pass , $RM){

            $SQ = "SELECT id FROM `admins` WHERE email = '$email' AND password = '$pass' AND status = '1'";
            $result = $this -> query($SQ);
            $user =  mysqli_fetch_assoc($result);
            $this -> freeResult($result); 

            if(isset($user['id'])){

                if($RM !== ''){

                    $_SESSION['admin_id'] = $user['id'];
                    
                }

                return true;

            }else{

                return false;

            }

        }
        
    }

?>