<?php

    require_once '../../../../init.php';
    $type = $main -> safePost('type');

    if($type === 'login'){

        $email = $main -> safePost('email');
        $pass = $main -> safePost('pass');
        $validEmail = $main -> validEmail($email);
        $safePassword = $main -> safePassword($pass);
        $RM = '';
        $access = $main -> logIn($email , $safePassword , $RM);


        if($email == ''){

            echo 'empty_email';

        }else if(!$validEmail){

            echo 'invlaid_email';

        }else if($pass == ''){

            echo 'empty_pass';

        }else if(!$access){

            echo 'access_denied';

        }

    }

?>