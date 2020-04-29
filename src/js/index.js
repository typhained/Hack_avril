//locale -> jour
let day = localStorage.getItem('day');
if (localStorage.getItem('day') == null) {
    day = "1";
}

// verif du jour
if (day == "1") {
    $("#coronaclose").click(function(){
        $("#corona").hide();
    })
    $('#telecommande').click(function () {
        $('#salon').animate({
            opacity: 0
        }, 1000,function() {
            //thing to do when you animation is finished e.g.
            location.href = 'tv.php';
        });
    });
    $("#telecommande").addClass("selected");
}

if (day == "2") {
    $("#corona").hide();
    $("#salon").removeClass("jour");
    $("#salon").addClass("nuit");
    $("#telecommande").removeClass("selected");
    $("#biere").addClass("selected");
    $('#biere').click(function () {
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
    $("#journal").removeClass("selected");
}

