var autoScrollInterval; // Variable pour stocker l'intervalle de l'autoscroll

function autoScroll() {
    var radioButtons = document.getElementsByName("position");
    var maxIndex = radioButtons.length;
    var currentIndex = 1;

    autoScrollInterval = setInterval(function () {
        radioButtons[currentIndex].checked = false;
        currentIndex = (currentIndex + 1) % maxIndex;
        radioButtons[currentIndex].checked = true;
    }, 4000);
}

function stopAutoScroll() {
    clearInterval(autoScrollInterval);
}

autoScroll();

var radioButtons = document.getElementsByName("position");
for (var i = 0; i < radioButtons.length; i++) {
radioButtons[i].addEventListener("click", stopAutoScroll);
}