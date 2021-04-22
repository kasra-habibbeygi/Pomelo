//upload picture
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function () {
    readURL(this);
});
//error box
$('.fa-times').click(function () {

    $('.error_box').fadeOut();

})
//profile and change password box
$(".change-button").eq(0).click(function () {

    $(".personalInfo").fadeOut();
    setTimeout(function () {

        $(".changePass").fadeIn();

    }, 500);

    $(".container").hide();
    $(".imageProfile").show();

})
$(".change-button").eq(1).click(function () {

    $(".changePass").fadeOut();
    setTimeout(function () {

        $(".personalInfo").fadeIn();

    }, 500);

    $(".imageProfile").hide();
    $(".container").show();
    $(".form-control").attr("disabled" , false);

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
$('#o_eye_show').click(function () {
    let inp_type = $('#oldPassword').attr('type');
    if (inp_type == "password") {
        $('#oldPassword').attr('type', 'text');
        $('.o_eye_show:first-child').hide();
        $('.o_eye_show:last-child').show();
    } else {
        $('#oldPassword').attr('type', 'password');
        $('.o_eye_show:last-child').hide();
        $('.o_eye_show:first-child').show();
    }
});