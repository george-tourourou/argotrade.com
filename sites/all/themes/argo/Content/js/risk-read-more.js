//risk and navigation bar script

$("#read-more-risk").click(function () {
    var moreText = $("#more-text");
    var btnText = $("#read-more-risk");

    console.log("clicked");

    if (moreText.css("display") != "none") {
        //hide
        btnText.html("Read more");
        moreText.css("display", "none");
        $("#front-page .home-banner-block").css("padding-top", "");
    } else {
        //show
        btnText.html("Read less");
        moreText.css("display", "inline");
        $("#front-page .home-banner-block").css("padding-top", "140px");
    }
});


function NavigationClicked(){
    //the event is happening after navbar collapse happens, so the if statement is reverted
    //data-scroll is on the html element. It is determine the scroll behavior
    if($("#MainNavbar").hasClass("show")){
        //closed
        $("#header-inner").removeClass("background-white");
    }
    else{
        //open
        $("#header-inner").addClass("background-white");
    }
}
