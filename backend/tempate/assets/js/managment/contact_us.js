//open email box
let flag = 0;
$(".send_items").eq(0).click(function () {

    if (flag == 0) {
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
let del_lane;
$(".acccept_edit_remove").eq(2).click(function(){

    del_lane = $(this);
    $(".cheack_box_modal_page").fadeIn();

})
//modal
$(".a_r").eq(0).click(function(){

    $(".cheack_box_modal_page").fadeOut();


})
$(".a_r").eq(1).click(function(){

    del_lane.parent().parent().remove();
    $(".cheack_box_modal_page").fadeOut();


})