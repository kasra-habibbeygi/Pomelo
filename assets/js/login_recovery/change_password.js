// errors
$('.change_password').click(function (e) {

    let inp_pass = $('#newPassword').val();
    let inp_rePass = $('#repPassword').val();

    if (inp_pass == "") {

        $('.error_box').fadeIn();
        $('.error').addClass('warning_error ');
        $('.error .text_error').text('لطفا کلمه عبور جدید خود را وارد کنید !');
        e.preventDefault();

    } else if (inp_rePass == "") {

        $('.error_box').fadeIn();
        $('.error').addClass('warning_error ');
        $('.error .text_error').text('لطفا کلمه عبور جدید خود را مجددا وارد کنید !');
        e.preventDefault();

    } else if (inp_pass.length < 8) {

        $('.error_box').fadeIn();
        $('.error').addClass('warning_error ');
        $('.error .text_error').text("کلمه عبور باید حداقل شامل 8 کاراکتر باشد !");
        e.preventDefault();

    } else if (inp_pass != inp_rePass) {

        $('.error_box').fadeIn();
        $('.error').addClass('warning_error ');
        $('.error .text_error').text('کلمه عبور جدید با تکرار کلمه عبور یکسان نیست !');
        e.preventDefault();

    }

});


$('.fa-times').click(function () {

    $('.error_box').fadeOut();

})
// show pass

$('#n_eye_show').click(function () {
    let inp_type = $('#newPassword').attr('type');
    if (inp_type == "password") {
        $('#newPassword').attr('type', 'text');
        $('.n_eye_show:first-child').hide();
        $('.n_eye_show:last-child').show();
    } else {
        $('#newPassword').attr('type', 'password');
        $('.n_eye_show:last-child').hide();
        $('.n_eye_show:first-child').show();
    }
});
$('#r_eye_show').click(function () {
    let inp_type = $('#repPassword').attr('type');
    if (inp_type == "password") {
        $('#repPassword').attr('type', 'text');
        $('.r_eye_show:first-child').hide();
        $('.r_eye_show:last-child').show();
    } else {
        $('#repPassword').attr('type', 'password');
        $('.r_eye_show:last-child').hide();
        $('.r_eye_show:first-child').show();
    }
});