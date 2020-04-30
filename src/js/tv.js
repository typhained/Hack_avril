var day = "2";

localStorage.setItem("day", day);

window.setTimeout(function () {
    $("#windy").toggleClass("hidden");
}, 15000);


window.setTimeout(function () {
    $("iframe").toggleClass("hidden");
    $("iframe").attr("src", "https://www.youtube.com/embed/cRy5_KpPxyM?autoplay=1&showinfo=0&controls=0");
}, 15000);


$("#tv-off").click(function(){
    $('section').animate({
        opacity: 0
    }, 1000,function() {
        //thing to do when you animation is finished e.g.
        location.href = 'index.php';
    });
});

