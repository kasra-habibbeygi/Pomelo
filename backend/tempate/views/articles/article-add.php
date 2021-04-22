<!DOCTYPE html>
<html lang="en">

<head>
    <!--    meta tags   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--    Title of page   -->
    <title>افزودن مقاله</title>

    <!--    css link    -->
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/general/fontawsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general.css">
    <link rel="stylesheet" href="../../assets/css/dashboard/dashboard.css">
    <link rel="stylesheet" href="../../assets/css/dashboard/nav_bar.css">
    <link rel="stylesheet" href="../../assets/css/articles/article-add.css">

</head>

<body>

    <section class="main">
        <div class="dashboard">
            <div class="left_box">

                <?php require_once '../layout/navbar.php'?>

                <div class="content_box">
                    <div class="addres_page">
                        <i class="fad fa-newspaper"></i>
                        <span class="text_addres">
                            تولید محتوا / مقالات / افزودن مقاله
                        </span>
                    </div>
                    <div class="content">
                        <div class="first_info form_style_all">
                            <p>اطلاعات اولیه</p>
                            <hr>
                            <div class="form_box">
                                <form>
                                    <div class="form-group">
                                        <label for="name_of_article">عنوان</label>
                                        <input type="text" class="form-control" id="name_of_article">
                                    </div>
                                    <div class="form-group ml-0">
                                        <label for="product_gp">
                                            گروه مقاله
                                        </label>
                                        <select class="form-control" id="product_gp">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="short_text">متن کوتاه</label>
                                        <textarea class="form-control" id="short_text" rows="2"></textarea>
                                    </div>
                                    <div class="form-group ml-0">
                                        <label for="product_gp">
                                            نمایش
                                        </label>
                                        <select class="form-control" id="product_gp">
                                            <option>...</option>
                                            <option>منتشر شده</option>
                                            <option>ثبت موقت</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="number">رتبه</label>
                                        <input type="text" class="form-control" id="number" value="01">
                                    </div>


                                </form>
                            </div>
                        </div>
                        <div class="main_content form_style_all">
                            <p>اطلاعات اصلی</p>
                            <hr>
                            <div class="form_box">
                                <form>
                                    <div class="form-group">
                                        <label for="main_pic">عکس اصلی</label>
                                        <input type="file" class="form-control-file" id="main_pic">
                                    </div>
                                    <div class="form-group">
                                        <label for="tags">برچسب</label>
                                        <textarea class="form-control" id="tags" rows="2"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="main_text">متن کامل</label>
                                        <textarea class="form-control" id="main_text" rows="15"></textarea>
                                    </div>


                                </form>
                            </div>
                        </div>
                        <div class="first_seo_info form_style_all">
                            <p>اطلاعات سئو</p>
                            <hr>
                            <div class="form_box">
                                <form>
                                    <div class="form-group">
                                        <label for="url_page">آدرس صفحه</label>
                                        <input type="text" class="form-control" id="url_page">
                                    </div>
                                    <div class="form-group">
                                        <label for="seo_keyword">کلمات کلیدی</label>
                                        <textarea class="form-control" id="seo_keyword" rows="2"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="seo_description">توضیحات سئو</label>
                                        <textarea class="form-control" id="seo_description" rows="4"></textarea>
                                    </div>


                                </form>
                            </div>
                        </div>

                        <div class="btn_box">
                            <button type="submit" class="btn add_btn">ثبت </button>
                            <button type="reset" class="btn back_btn">بازگشت</button>
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
    <script src="../../assets/js/articles/article-add.js"></script>


</body>

</html>