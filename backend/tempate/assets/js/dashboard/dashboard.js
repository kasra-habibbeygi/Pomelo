//nav bar drop down box
$(".nav_list").click(function () {

    $(".drop-down").hide();
    $(this).children(".drop-down").show();

    // $(window).click(function (e) {

    //     // if (e.target.className == "n_section") {
    //         e.stopPropagation();
    //         alert(e.target.className);
    //     // }
    // });
    
});
$(".envelope_show").click(function(){

    $(".envelope_show:first-child").hide();
    $(".envelope_show:nth-child(2)").show();
    
});

//dashbord js side bar menu

$('.articles_btn').click(function () {
    $('#article_menu').slideToggle();
});

$('.product_btn').click(function () {
    $('#product_menu').slideToggle();
});