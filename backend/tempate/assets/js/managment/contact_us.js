//open email box
let flag = 0;
$(".send_items:nth-child(1)").click(function () {


    if ($(this).hasClass("rotate_icon") == false) {
        $(this).addClass("rotate_icon");
        $(this).parent().children(".send_text").addClass('open_text_box');
        $(this).parent().children("form").css("display" , "flex");
        
        flag = 1;
        
    } else {
        
        $(this).removeClass("rotate_icon");
        $(this).parent().children(".send_text").removeClass('open_text_box');
        $(this).parent().children("form").css("display" , "none");
        flag = 0;

    }

})
//modal open(remove)
$(".acccept_edit_remove:nth-child(3)").click(function(){

    $(".cheack_box_modal_page").fadeIn();

})
//modal
$(".a_r:nth-child(1)").click(function(){

    $(".cheack_box_modal_page").fadeOut();


})