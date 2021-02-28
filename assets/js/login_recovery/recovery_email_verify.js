// timer
var min = $(".min").text();
var sec = $(".sec").text();
var timer = setInterval(function () {
    sec--;
    if (sec < 0) {

        sec = 59;
        min--;

    }


    $(".min").text(min);
    $(".sec").text(sec);

    if (min == 0 && sec == 0) {

        clearInterval(timer);

    }


}, 1000);


// errors
$('.verify').click(function (e) {

    let inp_email = $('#verify').val();

    if (inp_email == "") {

        $('.error_box').fadeIn();
        $('.error').addClass('warning_error ');
        $('.error .text_error').text('لطفا کد تایید را وارد کنید !');
        e.preventDefault();

    }
});


$('.fa-times').click(function () {

    $('.error_box').fadeOut();
    
})
