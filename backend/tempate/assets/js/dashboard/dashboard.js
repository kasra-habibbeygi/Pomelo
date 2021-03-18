// $(".nav_list").click(function () {

//     $(".drop-down").hide();
//     $(this).children(".drop-down").show();

// });


for (let i = 0; i < $(".nav_list").length; i++) {

    $(".nav_list").eq(i).click(function () {


        if($('.drop-down').eq(i).hasClass('OC')){

            $('.drop-down').removeClass('OC');

        }else{

            $('.drop-down').removeClass('OC');
            $('.drop-down').eq(i).addClass('OC');

        }

    });

}

//dashbord js side bar menu
let u_m = 1;
$('.drop_down').click(function () {

    $(this).children('.under_menu').slideToggle()

});

//close menu

let o_c = 1;
$('.open_close').click(function () {

    if (o_c === 1) {
        $('.text_menu , .down_btn , .side_bar_menu ul p , .img_of_logo , .name_of_page').hide();
        $('.main .dashboard .right_box').css({
            'overflow-y': 'auto',
            'width': '60px',
        });
        $(this).attr('class', 'fad fa-chevron-double-left open_close');
        $(this).css({
            'font-size': ' 1.2rem',
            'margin-right': ' 0px'
        });
        $('.main .dashboard .logo').css('width', '60px');
        $('.nav_bar , .left_box').css('width', '96.1%');
        o_c = 0;
    } else {
        $('.text_menu , .down_btn , .side_bar_menu ul p , .img_of_logo , .name_of_page').show();
        $('.main .dashboard .right_box').css({
            'overflow-y': 'scrull',
            'width': '15%',
        });
        $(this).attr('class', 'fad fa-chevron-double-right open_close');
        $(this).css({
            'font-size': ' 1.5rem',
            'margin-right': ' 20px'
        });
        $('.main .dashboard .logo').css('width', '15%');
        $('.nav_bar , .left_box').css('width', '85%');
        o_c = 1;
    }

});

//open menu
