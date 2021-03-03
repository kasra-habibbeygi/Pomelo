<?php

    $dblink =  mysqli_connect("localhost" , 'root' ,'' , 'pomelo')
        or die(mysqli_connect_error());

    mysqli_query($dblink , "SET NAMES 'UTF-8'");


    if(isset($_POST['login'])){

        $email = htmlentities(trim($_POST['email']) , ENT_QUOTES , 'UTF-8');
        $password = htmlentities(trim($_POST['password']) , ENT_QUOTES , 'UTF-8');
        $securePass = md5(sha1(base64_encode($password)));
        $checkedEmail = filter_var($email , FILTER_VALIDATE_EMAIL);

        if($email !== '' && $password !== '' && $checkedEmail && strlen($password) >= 8){

            $SQ = "SELECT id FROM `admin` WHERE email = '$email' AND password = '$securePass'";
            $result = mysqli_query($dblink , $SQ);

            if($result -> num_rows > 0){

                header('location:../dashbord/dashboard.html');

            }else{

                header('location:?msg=UNF');

            }
        }else{

            header('location:?msg=IR');

        }

    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!--    meta tags   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--    Title of page   -->
    <title>ورود</title>

    <!--    css link    -->
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/general/fontawsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general.css">
    <link rel="stylesheet" href="../../assets/css/login_recovery/login.css">

</head>

<body>

    <section class="main">
        <div class="login_page">
            <div class="l_left_b">
                <form action="" method="POST">

                    <div class="error_box <?php
                    
                    if(isset($_GET['msg'])){

                        $msg = htmlentities(trim($_GET['msg']) , ENT_QUOTES , 'UTF-8');

                        if($msg === 'IR'){

                            echo "IR";

                        }else if($msg === 'UNF'){

                            echo "UNF"; 

                        }

                    }?>">
                        <div class="error warning_error">
                            <i class="fal fa-exclamation-circle"></i>
                            <p class="text_error"></p>
                            <i class="fal fa-times"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">ایمیل</label>
                        <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">کلمه عبور</label>
                        <div class="input-group mb-2">
                            <input type="password" class="form-control" id="password" name="password">
                            <div class="input-group-prepend">
                                <button type="button" class="input-group-text eye_show">
                                    <i class="far fa-eye-slash"></i>
                                    <i class="fal fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label cb_label" for="check_box">مرا به خاطر بسپار
                            <input type="checkbox" class="form-check-input ck_input" id="check_box">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit_login" name="login">ورود</button>
                    <hr>
                    <a href="recovery_email.html" class="forgot_pass">
                        !رمز عبور خود را فراموش کرده ام
                    </a>
                </form>
            </div>
            <div class="l_right_b">
                <img src="../../assets/img/Login%20(1).gif" class="r_gif">
            </div>
        </div>
        <p class="cpy_right">
            &copy تمامی حقوق این سیستم مدیریت محتوا متعلق به گروه طراحی سایت پلاسما می باشد.
        </p>

    </section>
    <!--    js link     -->
    <script src="../../assets/js/general/jQuery.js"></script>
    <script src="../../assets/js/general/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/login_recovery/login.js"></script>



</body>

</html>

<?php

    mysqli_close($dblink);

?>