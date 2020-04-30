//locale -> jour
let day = localStorage.getItem('day');
var timeout;
if (localStorage.getItem('day') == null) {
    let day = "1";
    localStorage.setItem("day", day);
}
$("#zero").click(function(){
    let day = "1";
    localStorage.setItem("day", day);
    location.href = 'index.php';
})



// verif du jour
if (day == "1") {
    $("#telecommande").addClass("selected");

    // fade In de la video
    window.setTimeout(function () {
        $("#corona").animate({opacity : 1}, 1000)
    }, 3000);

    // fade Out de la video
    window.setTimeout(function () {
        $("#corona").animate({opacity : 0}, 1000)
    }, 10000);

    window.setTimeout(function () {
        $('#yt').attr('src', '');
        }, 10000);

    //vidéo finie

    window.setTimeout(function () {
        $("#corona").css("z-index", -200);
    }, 10050);

    window.setTimeout(function () {
        $("#nara-index").html('On ne parle plus que de ce Covid19, ça commence à me faire chier!');
    }, 10050);


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
    $("#tv img").removeClass("hidden");

    // window.setTimeout(function () {
    //     $("#salon").fadeOut(1000);
    // }, 5000);
    // window.setTimeout(function () {
    //     $("#end").animate({opacity : 1}, 1000)
    // }, 6000);
    let day = "1";
    localStorage.setItem("day", day);
}

