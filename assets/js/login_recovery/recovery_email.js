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

});


$('.fa-times').click(function () {

    $('.error_box').fadeOut();

});
