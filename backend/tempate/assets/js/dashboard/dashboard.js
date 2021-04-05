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

//dashbord js side bar menu nadie

//open and close submenu
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

//close menu nadie

//variable
let o_c = 1;

//function
function if_close(){
    $('.text_menu , .submenu_icon , .side_bar_menu ul p , .img_of_logo , .name_of_page , .under_menu li').hide();

    $('.main .dashboard .right_box').css({
        'overflow-y': 'unset',
        'width': '60px',
    });

    $('.open_close').attr('class', 'fad fa-chevron-double-left open_close');

    $('.open_close').css({ 'margin-right': ' 0px'});

    $('.main .dashboard .logo').css('width', '60px');

    $('.nav_bar , .left_box').css('width', '96.1%');

    $('.sub_menu_close').addClass('show_text_submenu');
    $('.show_menu_close').addClass('show_text_menu_name');

    o_c = 0;

    localStorage.setItem('o_c' , o_c);

}
function else_close (){

    $('.text_menu , .submenu_icon , .side_bar_menu ul p , .img_of_logo , .name_of_page , .under_menu li').show();

    $('.main .dashboard .right_box').css({
        'overflow-y': 'scrull',
        'width': '15%',
    });

    $('.open_close').attr('class', 'fad fa-chevron-double-right open_close');

    $('.open_close').css({ 'margin-right': ' 20px' });

    $('.main .dashboard .logo').css('width', '15%');

    $('.nav_bar , .left_box').css('width', '85%');

    $('.sub_menu_close').removeClass('show_text_submenu');
    $('.show_menu_close').removeClass('show_text_menu_name');
    
    o_c = 1;

    localStorage.setItem('o_c' , o_c);

}

//metod
$('.open_close').click(function () {
  
    if (o_c === 1) 
        if_close();
    
    else 
        else_close ()
});


// responsive side bar
if($(window).width() <= '992px')
    if_close();

$(window).resize(function(){
    if($(window).width() <= '992')
        if_close();
    
    else 
        else_close ();
    
});


//local storge 

if (localStorage.o_c == 1){
    else_close ();
}
else{
    if_close();
}