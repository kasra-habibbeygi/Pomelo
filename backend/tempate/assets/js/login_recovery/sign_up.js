//upload picture
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
//input page
$(".next_page").click(function(){

    if ($(".input_page").eq(0).css("display") == "flex") {
        
        $(".input_page").eq(0).css("display" , "none");
        $(".input_page").eq(1).css("display" , "flex");
        
    }
    else{
        
        $(".input_page").eq(1).css("display" , "none");
        $(".input_page").eq(0).css("display" , "flex");

    }

});
//error box
$('.fa-times').click(function () {

    $('.error_box').fadeOut();

})