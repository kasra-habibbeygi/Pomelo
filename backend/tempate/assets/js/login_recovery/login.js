// show password
$('.eye_show').click(function () {
    let inp_type = $('#password').attr('type');
    if (inp_type == "password") {
        $('#password').attr('type', 'text');
        $('.fa-eye-slash').hide();
        $('.fa-eye').show();
    } else {
        $('#password').attr('type', 'password');
        $('.fa-eye').hide();
        $('.fa-eye-slash').show();
    }
});

// close error when user click on error close
$('.fa-times').click(function () {

    $('.error_box').fadeOut();

});

// error function
function errorContent($content) {

    $('.error_box').fadeIn();
    $('.error .text_error').text($content);

}

// error ajax
$('#submit_login').click(function (e) {

    let email = $('#email').val();
    let pass = $('#password').val();
    let query = `type=login&email=${email}&pass=${pass}`;


    $.post('ajax.php', query, function (result) {

        if (result == 'empty_email')
            errorContent('لطفا ایمیل خود را وارد کنید!');

        else if (result == 'empty_pass')
            errorContent('لطفا پسورد خود را وارد کنید!');

        else if (result == 'invlaid_email')
            errorContent('ایمیل وارد شده اشتباه است !');

        else if (result == 'access_denied')
            errorContent('متاسفانه کاربری یافت نشد !');

        else
            valid = true;

    });

})

let valid = false;

function validation() {

    if (valid)
        return true;

    else
        return false;

}