//locale -> jour
let day = localStorage.getItem('day');
var timeout;
if (localStorage.getItem('day') == null) {
    day = "1";
}

// verif du jour
if (day == "1") {
    $("#telecommande").addClass("selected");

    // fade In de la video
    // fade Out de la video


    //vidéo finie
    $("#coronaclose").click(function(){
        $("#corona").hide();
        $("#nara-index").html('On ne parle plus que de ce Covid19, ça commence à me faire chier!');
    })


    window.setTimeout(function () {
        $("#nara-index").html('Où est cette foutu télécommande?!');
    }, 15000);

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
    $("#nara-index").html('Encore ce foutu virus, j\'ai besoin d\'une biere !!!');
    $('#biere').click(function () {
        $("#player")[0].play();
        $('#salon').animate({
            opacity: 0
        }, 3000,function() {
            //thing to do when you animation is finished e.g.
            location.href = 'biere.php';
        });
    });
} else if (day == "3") {
    $("#nara-index").html("Wah.. C'était quoi ces rêves bizarres?!");
    $("#corona").hide();
    $("#salon").removeClass("nuit");
    $("#salon").addClass("jour");
    $("#biere").removeClass("selected");
    $("#journal").addClass("selected");
    $("#biere").toggleClass("hidden");
    $("#biere-vide").toggleClass("hidden");
    window.setTimeout(function () {
        $("#nara-index").html("On va lire un peu le journal...");
    }, 5000);
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
    $("#nara-index").html("C'est la fin du confinement!");
    $("#tv p").html("BREAKING NEWS");
    window.setTimeout(function () {
        $("#salon").fadeOut(1000);
    }, 5000);
    window.setTimeout(function () {
        $("#end").animate({opacity : 1}, 1000)
    }, 6000);
}

