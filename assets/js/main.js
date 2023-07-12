function toggleSmileMenu() {
    var smileMenu = document.getElementById("smile");
    var smileNavs = document.getElementById("navSmile");
    var lightningMenu = document.getElementById("lightning");

    if (smileMenu.style.display === "block") {
        smileMenu.style.display = "none";
        smileNavs.style.color = "#a6a6a6";
    } else {
        smileMenu.style.display = "block";
        lightningMenu.style.display = "none";
        smileNavs.style.color = "#fff";
    }
}

function toggleLightningMenu() {
    var smileMenu = document.getElementById("smile");
    var smileNavs = document.getElementById("navLightning");
    var lightningMenu = document.getElementById("lightning");

    if (lightningMenu.style.display === "block") {
        lightningMenu.style.display = "none";
        smileNavs.style.color = "#a6a6a6";
    } else {
        lightningMenu.style.display = "block";
        smileMenu.style.display = "none";
        smileNavs.style.color = "#fff";
    }
}

document.addEventListener("click", function (event) {
    var smileMenu = document.getElementById("smile");
    var navSmile = document.getElementById("navSmile");
    var navLightning = document.getElementById("navLightning");
    if (!event.target.closest("#smile") && !event.target.closest(".nav-item")) {
        smileMenu.style.display = "none";
        navSmile.style.color = "#a6a6a6";
    }

    var smileMenu = document.getElementById("lightning");
    if (!event.target.closest("#lightning") && !event.target.closest(".nav-item")) {
        smileMenu.style.display = "none";
        navLightning.style.color = "#a6a6a6";
    }
});
