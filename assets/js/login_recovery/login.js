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