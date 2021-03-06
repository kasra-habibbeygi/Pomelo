<?php

    require_once '../../../../init.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>بازیابی رمز عبور</title>
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/general/fontawsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general.css">
    <link rel="stylesheet" href="../../assets/css/login_recovery/recovery_email.css">
</head>

<body>

    <section class="main">

        <div class="recovery_page">

            <div class="r_left_box">

                <a href="login.html" class="return_login responisive_back">
                    <i class="far fa-angle-left"></i>
                    <p class="return_login_text">بازگشت</p>
                </a>

                <form action="recovery_email_verify.html">

                    <div class="error_box">
                        <div class="error">
                            <i class="fal fa-exclamation-circle"></i>
                            <p class="text_error">دلام</p>
                            <i class="fal fa-times"></i>
                        </div>
                    </div>


                    <label for="SM">برای بازیابی رمز عبور، ایمیل خود را وارد کنید.</label>
                    <input type="text" id="SM" class="e_input form-control">
                    <button type="submit" class="btn btn-primary send_mail">ارسال</button>
                    <a href="login.html" class="btn btn-primary f_back">
                        <i class="far fa-angle-left"></i>
                        <p class="return_login_text">بازگشت</p>
                    </a>
                </form>

            </div>
            <div class="r_right_box">

                <img src="../../assets/img/Forgot-password.gif" class="r_r_b_photo" alt="">

            </div>

        </div>
        <p class="cpy_right">
            &copy تمامی حقوق این سیستم مدیریت محتوا متعلق به گروه طراحی سایت پلاسما می باشد.
        </p>

    </section>
    <script src="../../assets/js/general/jQuery.js"></script>
    <script src="../../assets/js/general/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/login_recovery/recovery_email.js"></script>

</body>

</html>