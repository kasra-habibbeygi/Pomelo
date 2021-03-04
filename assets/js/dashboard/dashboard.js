$(".listIcon").click(function () {

    $(".listIcon").children(".dropDown").css("display", "none");
    $(this).children(".dropDown").toggle();
    

});
$(".main").click(function () {

    alert($(".dropDown").css("display"));
    if ($(".dropDown").css("display") != "none") {
        
        $(".dropDown").css("display" , "none");
        
    }
});  