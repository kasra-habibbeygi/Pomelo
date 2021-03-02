// show pass
$(document).ready(function (){

    $('.eye_show').click(function (){
       let inp_type = $('#password').attr('type');
       if (inp_type == "password"){
           $('#password').attr('type','text');
           $('.fa-eye-slash').hide();
           $('.fa-eye').show();
       }
       else {
           $('#password').attr('type','password');
           $('.fa-eye').hide();
           $('.fa-eye-slash').show();
       }
    });

});

// errors
$('#submit_login').click(function (e) {

    let inp_email = $('#email').val();
    let inp_pass = $('#password').val();

    if (inp_email == "") {

        $('.error_box').fadeIn();
        $('.error .text_error').text('لطفا ایمیل خود را وارد کنید!');
        e.preventDefault();

    } else if (inp_pass == "") {

        $('.error_box').fadeIn();
        $('.error .text_error').text('لطفا پسورد خود را وارد کنید!');
        e.preventDefault();

    } else if (inp_pass.length < 5) {

        $('.error_box').fadeIn();
        $('.error .text_error').text('پسورد نمیتواند کمتر از 5 کلمه باشد!');
        e.preventDefault();

    }
});


$('.fa-times').click(function () {

    $('.error_box').fadeOut();
    
})

// backend error
if($('.error_box').hasClass('IR')){

    $('.error_box').fadeIn();
    $('.error .text_error').text('مشخصات وارد شده اشتباه است .');
    e.preventDefault();

}else if($('.error_box').hasClass('UNF')){

    $('.error_box').fadeIn();
    $('.error .text_error').text('کاربر یافت نشد .');
    e.preventDefault();

}