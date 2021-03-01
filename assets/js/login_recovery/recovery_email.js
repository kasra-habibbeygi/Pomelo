// error
var width_size = $(window).width();
$('.send_mail').click(function (e) {
    
    let inp_email = $('#SM').val();

    if (inp_email == "") {
        
        $('.error_box').fadeIn();
        $('.error').addClass('warning_error ');
        $('.error .text_error').text('لطفا ایمیل خود را وارد کنید !');
        e.preventDefault();
        
    }
    if ($(".error_box").css("display") != "none") {
        if(width_size <= 720){
    
            $(".responisive_back").css("top" , "200px");
    
        }
    }
});


$('.fa-times').click(function () {
    
    $('.error_box').fadeOut();
setTimeout(function(){
    if(width_size <= 720){
    

        $(".responisive_back").css("top" , "135px");

    }
} , 400)
});


$(window).resize(function(){

    if ($(".error_box").css("display") != "none") {
        
        if(width_size <= 720){
            
            $(".responisive_back").css("top" , "200px");
            
        }
    }

});