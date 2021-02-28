$('#submit_login').click(function (e) {
    let inp_email = $('#email').val();
    let inp_pass = $('#password').val();
    if (inp_email == "") {
        $('.error_box').fadeIn();
        $('.error').addClass('warning_error ');
        $('.error .text_error').text('لطفا ایمیل خود را وارد کنید!');
        e.preventDefault();
    } else if (inp_pass == "") {
        $('.error_box').fadeIn();
        $('.error').addClass('warning_error ');
        $('.error .text_error').text('لطفا پسورد خود را وارد کنید!');
        e.preventDefault();
    } else if (inp_pass.length < 5) {
        $('.error_box').fadeIn();
        $('.error').addClass('warning_error ');
        $('.error .text_error').text('پسورد نمیتواند کمتر از 5 کلمه باشد!');
        e.preventDefault();
    }
});


$('.fa-times').click(function () {
    $('.error_box').fadeOut();
})
