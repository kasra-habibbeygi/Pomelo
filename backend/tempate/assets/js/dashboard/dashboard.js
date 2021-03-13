$(".nav_list").click(function () {

    $(".drop-down").hide();
    $(this).children(".drop-down").show();

});

//dashbord js side bar menu

$('.down_btn').click(function () {
    $('#article_menu').slideToggle();

});

//close menu
$('.fa-chevron-double-right').click(function () {
    $('.text_menu , .down_btn , .side_bar_menu ul p , .img_of_logo , .name_of_page').hide();
    $('.main .dashboard .right_box').css({
        'overflow-y': 'auto',
        'width': '60px',
    });
    $( this ).replaceWith( "<i class='fad fa-chevron-double-left'></i>" );
    $(this).css({
        'font-size': ' 1.2rem',
        'margin-right': ' 0px'
    });
    $('.main .dashboard .logo').css('width', '60px');
    $('.nav_bar , .left_box').css('width', '96.1%');
    
});

//open menu

$('.fa-chevron-double-left').click(function () {
    $('.text_menu , .down_btn , .side_bar_menu ul p , .img_of_logo , .name_of_page').show();
    $('.main .dashboard .right_box').css({
        'overflow-y': 'scull',
        'width': '15%',
    });
    $( this ).replaceWith( "<i class='fad fa-chevron-double-right'></i>" );
    $(this).css({
        'font-size': ' 1.5rem',
        'margin-right': ' 20px'
    });
    $('.main .dashboard .logo').css('width', '15%');
    $('.nav_bar , .left_box').css('width', '85%');
    
});

