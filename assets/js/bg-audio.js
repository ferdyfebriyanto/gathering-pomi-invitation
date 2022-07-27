var status = 0;
$(document).ready(function() {
    document.getElementById("myAudio").play();

});

function playMyAudio() {
    if (status == 0) {
        status = 1;
        document.getElementById("myAudio").pause();
        document.getElementById(iconID).className = "bi bi-volume-mute";
    } else {
        status = 0;
        document.getElementById("myAudio").play();
        document.getElementById(iconID).className = "bi bi-volume-up";
    }
};

function change(iconID) {
    if (document.getElementById(iconID).className == "bi bi-volume-up") {
        document.getElementById(iconID).className = "bi bi-volume-mute";
    } else {
        document.getElementById(iconID).className = "bi bi-volume-up";
    }
}