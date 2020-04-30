var day = "2";

localStorage.setItem("day", day);

window.setTimeout(function () {
    $("#windy").toggleClass("hidden");
}, 10000);

window.setTimeout(function () {
    $("iframe").toggleClass("hidden");
}, 10000);


$("#tv-off").click(function(){
    $('section').animate({
        opacity: 0
    }, 1000,function() {
        //thing to do when you animation is finished e.g.
        location.href = 'index.php';
    });
});

