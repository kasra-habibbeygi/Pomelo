<!DOCTYPE html>
<html lang="en">

<head>
    <!--    meta tags   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--    Title of page   -->
    <title>لیست محصولات</title>

    <!--    css link    -->
    <link rel="stylesheet" href="../../assets/css/general/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/general/fontawsome.css">
    <link rel="stylesheet" href="../../assets/css/general/general.css">
    <link rel="stylesheet" href="../../assets/css/dashboard/dashboard.css">
    <link rel="stylesheet" href="../../assets/css/dashboard/nav_bar.css">
    <link rel="stylesheet" href="../../assets/css/product/products-list.css">

</head>

<body>

    <section class="main">
        <div class="dashboard">
            <div class="left_box">

                <?php require_once '../layout/navbar.php'?>

                <div class="content_box">
                    <div class="addres_page">
                        <i class="fad fa-cart-plus"></i>
                        <span class="text_addres">
                            تولید محتوا / محصولات / لیست محصولات
                        </span>
                    </div>
                    <div class="content">
                        <div class="search_product">
                            <p>جستجو</p>
                            <hr>
                            <div class="search_form_box">
                                <form>
                                    <div class="form-group">
                                        <label for="search">نام محصول</label>
                                        <input type="search" class="form-control" id="search">
                                    </div>
                                    <div class="form-group ml-0">
                                        <label for="product_gp">
                                            گروه محصول
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
                                        <label for="sub_product_gp">زیرگروه محصول</label>
                                        <select class="form-control" id="sub_product_gp">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group ml-0">
                                        <label for="show">تعداد نمایش</label>
                                        <select class="form-control" id="show">
                                            <option>10</option>
                                            <option>20</option>
                                            <option>50</option>
                                            <option>100</option>
                                            <option>1000</option>
                                        </select>
                                    </div>
                                    <div class="form-group ml-0">
                                        <label for="show">فیلتر</label>
                                        <select class="form-control" id="show">
                                            <option>نمایش همه</option>
                                            <option>فاقد نظر</option>
                                            <option>دارای نظر تایید نشده</option>
                                            <option>گروه بندی شده </option>
                                            <option>فاقد گروه بندی</option>
                                            <option>انتشار یافته</option>
                                            <option>در انتظار انتشار </option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="btn_box">
                                        <button type="submit" class="btn search_btn">جستجو</button>
                                        <button type="reset" class="btn reset_btn">ریست</button>
                                    </div>

                                </form>
                            </div>
                        </div>

                        <div class="table_list">
                            <div class="btn_edit">
                                <button type="button" class="btn del_btn">حذف گروهی</button>
                                <button type="button" class="btn release_btn">انتشار گروهی</button>
                                <button type="button" class="btn new_btn">جدید</button>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <input type="checkbox" class="checkmark">
                                        </th>
                                        <th scope="col">#</th>
                                        <th scope="col">تصویر</th>
                                        <th scope="col">عنوان</th>
                                        <th scope="col">دسته بندی</th>
                                        <th scope="col">وضعیت انتشار</th>
                                        <th scope="col"> تاریخ درج</th>
                                        <th scope="col">حذف</th>
                                        <th scope="col">ویرایش</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label class="check_box_custom">
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </th>
                                        <td>1</td>
                                        <td>
                                            <img src="../../assets//img/img4.jpg" alt="محصول1" title="محصول1"
                                                class="img_product">
                                        </td>
                                        <td>گل رز</td>
                                        <td>گل ها</td>
                                        <td>
                                            <button class="btn release_btn">
                                                <i class="far fa-check"></i>
                                            </button>
                                        </td>
                                        <td>
                                            1399/10/08
                                        </td>
                                        <td>
                                            <button class="btn del_btn">
                                                <i class="fal fa-trash-alt"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn edit_btn">
                                                <i class="far fa-pen"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" class="checkmark">
                                        </th>
                                        <td>1</td>
                                        <td>
                                            <img src="../../assets//img/img4.jpg" alt="محصول1" title="محصول1"
                                                class="img_product">
                                        </td>
                                        <td>گل رز</td>
                                        <td>گل ها</td>
                                        <td>
                                            <button class="btn release_btn">
                                                <i class="far fa-check"></i>
                                            </button>
                                        </td>
                                        <td>
                                            1399/10/08
                                        </td>
                                        <td>
                                            <button class="btn del_btn">
                                                <i class="fal fa-trash-alt"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn edit_btn">
                                                <i class="far fa-pen"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <input type="checkbox" class="checkmark">
                                        </th>
                                        <td>1</td>
                                        <td>
                                            <img src="../../assets//img/img4.jpg" alt="محصول1" title="محصول1"
                                                class="img_product">
                                        </td>
                                        <td>گل رز</td>
                                        <td>گل ها</td>
                                        <td>
                                            <button class="btn release_btn">
                                                <i class="far fa-check"></i>
                                            </button>
                                        </td>
                                        <td>
                                            1399/10/08
                                        </td>
                                        <td>
                                            <button class="btn del_btn">
                                                <i class="fal fa-trash-alt"></i>
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn edit_btn">
                                                <i class="far fa-pen"></i>
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="pagination">
                                <a href="#">&laquo;</a>
                                <a href="#">1</a>
                                <a href="#" class="active">2</a>
                                <p>...</p>
                                <a href="#">4</a>
                                <a href="#">5</a>

                                <a href="#">&raquo;</a>
                            </div>
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
    <script src="../../assets/js/product/products-list.js"></script>


</body>

</html>