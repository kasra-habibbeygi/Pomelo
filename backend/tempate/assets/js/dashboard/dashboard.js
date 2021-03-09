$(".listIcon").click(function () {

    let title = $(this);
    let dropDown = $(this).children(".dropDown");
    $(".listIcon").children(".dropDown").css("display", "none");
    $(".listIcon").removeClass("dropDownFirst");
    $(".listIcon").removeClass("dropDownLast");

    if (title.parent().attr("id") == "leftBox") {

        title.addClass("dropDownFirst");

    } else {

        title.addClass("dropDownLast");

    }
    $(this).children(".dropDown").toggle();
    $(window).click(function (e) {


        if( title.attr("class") != $(e.target).attr("class") && dropDown.attr("class") != $(e.target).attr("class") ){

            $(title).children(".dropDown").css("display", "none");
        }

    });  


});


//dashbord js side bar menu

$('.articles_btn').click(function(){
    $('#article_menu').slideToggle();
});

$('.product_btn').click(function(){
    $('#product_menu').slideToggle();
});