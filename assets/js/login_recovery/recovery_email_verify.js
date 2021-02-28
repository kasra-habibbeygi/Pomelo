$(document).ready(function () {
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


    }, 1000)

    $(".btn").click(function (e) {

        if ($(".e_input").val() == "") {


            $(".error_box").text(".جای خالی را پر کنید");
            e.preventDefault();
        }

    });

});