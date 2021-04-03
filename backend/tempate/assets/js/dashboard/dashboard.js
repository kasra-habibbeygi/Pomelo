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

//dashbord js side bar menu1
for(let j = 0 ; j < $('.submenu_btn').length ; j++){

    $('.submenu_btn').eq(j).click(function(){

        if($(this).next().css('display') === 'none'){

            $('.submenu_btn').next().slideUp();
            $('.submenu_icon').attr('class' , 'fal fa-chevron-left submenu_icon');
            $(this).next().slideDown();
            $('.submenu_icon').eq(j).attr('class' , 'fal fa-chevron-down submenu_icon');

        }else {

            $(this).next().slideUp();
            $('.submenu_icon').eq(j).attr('class' , 'fal fa-chevron-left submenu_icon');
        }

    });

}

//close menu


let o_c = 1;


$('.open_close').click(function () {

    if (o_c === 1) {

        $('.text_menu , .submenu_icon , .side_bar_menu ul p , .img_of_logo , .name_of_page , .under_menu li').hide();

        $('.main .dashboard .right_box').css({
            'overflow-y': 'auto',
            'width': '60px',
        });

        $(this).attr('class', 'fad fa-chevron-double-left open_close');

        $(this).css({ 'margin-right': ' 0px'});

        $('.main .dashboard .logo').css('width', '60px');

        $('.nav_bar , .left_box').css('width', '96.1%');
        
        o_c = 0;

        for(let n = 0 ; n < $('.icon_menu').length ; n++){
            $('.icon_menu').eq(n).mouseover(function(){
                $(this).next().css('display' , 'block');
                
            });
        }

    } 
    
    else {
        
        $('.text_menu , .submenu_icon , .side_bar_menu ul p , .img_of_logo , .name_of_page , .under_menu li').show();

        $('.main .dashboard .right_box').css({
            'overflow-y': 'scrull',
            'width': '15%',
        });

        $(this).attr('class', 'fad fa-chevron-double-right open_close');

        $(this).css({ 'margin-right': ' 20px' });

        $('.main .dashboard .logo').css('width', '15%');

        $('.nav_bar , .left_box').css('width', '85%');
        
        o_c = 1;
    }

});

if($(window).width() <= '768'){

    $('.text_menu , .down_btn , .side_bar_menu ul p , .img_of_logo , .name_of_page').hide();

    $('.main .dashboard .right_box').css({
        'overflow-y': 'auto',
        'width': '60px',
    });

    $(this).attr('class', 'fad fa-chevron-double-left open_close');

    $(this).css({ 'margin-right': ' 0px'});

    $('.main .dashboard .logo').css('width', '60px');

    $('.nav_bar , .left_box').css('width', '96.1%');

    o_c = 0;
}

//open menu
