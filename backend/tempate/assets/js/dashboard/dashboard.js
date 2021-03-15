$(".nav_list").click(function () {

    $(".drop-down").hide();
    $(this).children(".drop-down").show();

});

//dashbord js side bar menu

// $('.drop_down').click(function () {
//     alert('ok')

// });



//close menu
let o_c=1;
$('.open_close').click(function () {

    if(o_c===1){
        $('.text_menu , .down_btn , .side_bar_menu ul p , .img_of_logo , .name_of_page').hide();
        $('.main .dashboard .right_box').css({
            'overflow-y': 'auto',
            'width': '60px',
        });
        $( this ).attr( 'class' , 'fad fa-chevron-double-left open_close');
        $(this).css({
            'font-size': ' 1.2rem',
            'margin-right': ' 0px'
        });
        $('.main .dashboard .logo').css('width', '60px');
        $('.nav_bar , .left_box').css('width', '96.1%');
        o_c=0;
    }
    else{
        $('.text_menu , .down_btn , .side_bar_menu ul p , .img_of_logo , .name_of_page').show();
        $('.main .dashboard .right_box').css({
            'overflow-y': 'scull',
            'width': '15%',
        });
        $( this ).attr( 'class' , 'fad fa-chevron-double-right open_close');
        $(this).css({
            'font-size': ' 1.5rem',
            'margin-right': ' 20px'
        });
        $('.main .dashboard .logo').css('width', '15%');
        $('.nav_bar , .left_box').css('width', '85%');
        o_c=1;
    }
 
});

//open menu


