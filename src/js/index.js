//locale -> jour
let day = localStorage.getItem('day');
if (localStorage.getItem('day') == null) {
    day = "1";
}
$("#zero").click(function(){
    let day = "1";
    localStorage.setItem("day", day);
    location.href = 'index.php';
})



// verif du jour
if (day == "1") {
    $("#coronaclose").click(function(){
        $("#corona").hide();
    })
    $("#telecommande").addClass("selected");
    $('#telecommande').click(function () {
        $('#salon').animate({
            opacity: 0
        }, 1000,function() {
            //thing to do when you animation is finished e.g.
            location.href = 'tv.php';
        });
    });
}

if (day == "2") {
    $("#corona").hide();
    $("#salon").removeClass("jour");
    $("#salon").addClass("nuit");
    $("#telecommande").removeClass("selected");
    $("#biere").addClass("selected");
    $('#biere').click(function () {
        $("#player")[0].play();
        $('#salon').animate({
            opacity: 0
        }, 1000,function() {
            //thing to do when you animation is finished e.g.
            location.href = 'biere.php';
        });
    });

} else if (day == "3") {
    $("#corona").hide();
    $("#salon").removeClass("nuit");
    $("#salon").addClass("jour");
    $("#biere").removeClass("selected");
    $("#journal").addClass("selected");
    $("#biere").toggleClass("hidden");
    $("#biere-vide").toggleClass("hidden");
    $('#journal').click(function () {
        $('#salon').animate({
            opacity: 0
        }, 1000,function() {
            //thing to do when you animation is finished e.g.
            location.href = 'journal.php';
        });
    });
} else if (day=="4") {
    $("#corona").hide();
    $("#biere").toggleClass("hidden");
    $("#biere-vide").toggleClass("hidden");
    $("#journal").removeClass("selected");
}

