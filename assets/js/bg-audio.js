var status = 0;
$(document).ready(function() {
    document.getElementById("myAudio").play();

});

function playMyAudio() {
    if (status == 0) {
        status = 1;
        document.getElementById("myAudio").pause();
    } else {
        status = 0;
        document.getElementById("myAudio").play();
    }
};

function change(iconID) {
    if (document.getElementById(iconID).className == "bi bi-volume-up") {
        document.getElementById(iconID).className = "bi bi-volume-mute";
    } else {
        document.getElementById(iconID).className = "bi bi-volume-up";
    }
}