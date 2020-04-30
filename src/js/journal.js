var day = "4";

localStorage.setItem("day", day);

$("#good,#bad").click(function() {
    var id = $(this).attr('id');
    if (id === "good"){
        $(this).addClass('good');
    } else {
        $(this).addClass('bad');
    }
    $("#good,#bad").prop('disabled', true);
    setTimeout( function() {
        $("#player")[0].play();
    }, 1000);
    setTimeout(
        function() {;
            $("#question1").toggleClass("caché");
            $("#question2").toggleClass("caché");
        },
        2000);
});

$("#good2,#bad2").click(function() {
    var id = $(this).attr('id');
    if (id === "good2"){
        $(this).addClass('good');
    } else {
        $(this).addClass('bad');
    }
    $("#good2,#bad2").prop('disabled', true);
    setTimeout( function() {
        $("#player")[0].play();
    }, 1000);
    setTimeout(
        function() {
            $("#question2").toggleClass("caché");
            $("#question3").toggleClass("caché");
        },
        2000);
});

$("#good3,#bad3").click(function() {
    var id = $(this).attr('id');
    if (id === "good3"){
        $(this).addClass('good');
    } else {
        $(this).addClass('bad');
    }
    $("#good3,#bad3").prop('disabled', true);
    setTimeout( function() {
        $("#player")[0].play();
    }, 1000);
    setTimeout(
        function() {
            $("#question3").toggleClass("caché");
            $("#question4").toggleClass("caché");
        },
        2000);
});

$("#good4,#bad4").click(function() {
    var id = $(this).attr('id');
    if (id === "good4"){
        $(this).addClass('good');
    } else {
        $(this).addClass('bad');
    }
    $("#good4,#bad4").prop('disabled', true);
    setTimeout( function() {
        $("#player")[0].play();
    }, 500);
    setTimeout(
        function() {
            $("#question4").toggleClass("caché");
            $("#question5").toggleClass("caché");
        },
        2000);
})

$("#good5,#bad5").click(function() {
    var id = $(this).attr('id');
    if (id === "good5"){
        $(this).addClass('good');
    } else {
        $(this).addClass('bad');
    }
    $("#good5,#bad5").prop('disabled', true);
    setTimeout( function() {
        $("#player")[0].play();
    }, 1000);
    setTimeout(
        function() {
            $("#question5").toggleClass("caché");
            $("#question6").toggleClass("caché");
        },
        2000);
});

$("#good6,#bad6").click(function() {
    var id = $(this).attr('id');
    if (id === "good6"){
        $(this).addClass('good');
    } else {
        $(this).addClass('bad');
    }
    $("#good6,#bad6").prop('disabled', true);
    setTimeout( function() {
        $("#player")[0].play();
    }, 1000);
    setTimeout(
        function() {
            $("#question6").toggleClass("caché");
            $("#question7").toggleClass("caché");
        },
        2000);
});

$("#good7,#bad7").click(function() {
    var id = $(this).attr('id');
    if (id === "good7"){
        $(this).addClass('good');
    } else {
        $(this).addClass('bad');
    }
    $("#good7,#bad7").prop('disabled', true);
    setTimeout( function() {
        $("#player")[0].play();
    }, 1000);
    setTimeout(
        function() {
            $("#question7").toggleClass("caché");
            $("#question8").toggleClass("caché");
        },
        2000);
});

$("#good8,#bad8").click(function() {
    var id = $(this).attr('id');
    if (id === "good8"){
        $(this).addClass('good');
    } else {
        $(this).addClass('bad');
    }
    $("#good8,#bad8").prop('disabled', true);
    setTimeout( function() {
        $("#player")[0].play();
    }, 1000);
    setTimeout(
        function() {
            $("#question8").toggleClass("caché");
            $("#confinement").toggleClass("caché");
        },
        2000);
});

$("#confinement").hover(function() {
    setTimeout(
        function() {
            location.href = 'index.php';
        },
        2000);
});
