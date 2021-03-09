$(".nav_list").click(function () {
    
    $(".drop-down").hide();
    $(this).children(".drop-down").show();

});

//dashbord js side bar menu

$('.articles_btn').click(function(){
    $('#article_menu').slideToggle();
});

$('.product_btn').click(function(){
    $('#product_menu').slideToggle();
});
