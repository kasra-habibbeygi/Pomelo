<!DOCTYPE html>
<html lang="en">

<head>
    <!--    meta tags   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--    Title of page   -->
    <title>داشبورد</title>

    <!--    css link    -->
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/general/fontawsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general.css">
    <link rel="stylesheet" href="../../assets/css/dashboard/dashboard.css">
    <link rel="stylesheet" href="../../assets/css/dashboard/nav_bar.css">

</head>

<body>

    <section class="main">
        <div class="dashboard">
            <div class="left_box">

                <?php require_once '../layout/navbar.php'?>

                <div class="content_box">
                    <div class="addres_page">
                        <i class="fad fa-home-lg-alt"></i>
                        <span class="text_addres">
                            داشبورد
                        </span>
                    </div>
                    <div class="content">
                        <div class="sign_box">
                            <h1>
                                پنل مدیریت محتوا سایت پوملو
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

            <?php require_once '../layout/dashboard.php'?>
            
        </div>
    </section>

    <script src="../../assets/js/general/jQuery.js"></script>
    <script src="../../assets/js/general/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/dashboard/dashboard.js"></script>


</body>

</html>