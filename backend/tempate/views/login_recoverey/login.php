<?php

    require_once '../../../../init.php';
    if($main -> checkLogin())
        $main -> redirect('../dashbord/dashboard.html');


    $login = $main -> safePost('login');
    if(isset($login)){

        $email = $main -> safePost('email');
        $pass = $main -> safePost('password');
        $pass = $main -> safePassword($pass);
        $rememberMe = $main -> safePost('RM');

        $access = $main -> logIn($email , $pass , $rememberMe);
        if($access){

            $main -> redirect('../dashbord/dashboard.html');

        }

    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ورود</title>
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/general/fontawsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general.css">
    <link rel="stylesheet" href="../../assets/css/login_recovery/login.css">

</head>

<body>

    <section class="main">
        <div class="login_page">
            <div class="l_left_b">
                <form action="" method="POST" onsubmit="return validation()">

                    <div class="error_box">
                        <div class="error warning_error">
                            <i class="fal fa-exclamation-circle"></i>
                            <p class="text_error"></p>
                            <i class="fal fa-times"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">ایمیل</label>
                        <input type="text" class="form-control" id="email" name="email">
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
                            <input type="checkbox" class="form-check-input ck_input" id="check_box" name="RM">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit_login" name="login">ورود</button>
                    <hr>
                    <a href="recovery_email.html" class="forgot_pass">!رمز عبور خود را فراموش کرده ام</a>
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
    <script src="../../assets/js/general/jQuery.js"></script>
    <script src="../../assets/js/general/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/login_recovery/login.js"></script>

</body>

</html>