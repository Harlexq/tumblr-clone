function toggleLightningMenu() {
    const lightningMenu = document.getElementById("lightning");
    const navNightningMenu = document.getElementById("navLightning");

    if (!navNightningMenu.classList.contains("show")) {
        navNightningMenu.classList.add("show");
        lightningMenu.style.display = "block";
    } else {
        navNightningMenu.classList.remove("show");
        lightningMenu.style.display = "none";
    }
}

document.addEventListener("click", function (event) {
    const lightningMenu = document.getElementById("lightning");
    const navLightningDiv = document.getElementById("navLightning");

    if (!event.target.closest("#lightning") && !event.target.closest("#navLightning")) {
        navLightningDiv.classList.remove("show");
        lightningMenu.style.display = "none";
    }
});

function toggleSmileMenu() {
    const smileDiv = document.getElementById("smile");
    const navSmileDiv = document.getElementById("navSmile");

    if (!navSmileDiv.classList.contains("show")) {
        navSmileDiv.classList.add("show");
        smileDiv.style.display = "block";
    } else {
        navSmileDiv.classList.remove("show");
        smileDiv.style.display = "none";
    }
}

document.addEventListener("click", function (event) {
    const smileMenu = document.getElementById("smile");
    const navSmileDiv = document.getElementById("navSmile");

    if (!event.target.closest("#smile") && !event.target.closest("#navSmile")) {
        navSmileDiv.classList.remove("show");
        smileMenu.style.display = "none";
    }
});

function toggleUserMenu() {
    const userDiv = document.getElementById("user");
    const navUserDiv = document.getElementById("navUser");

    if (!navUserDiv.classList.contains("show")) {
        navUserDiv.classList.add("show");
        userDiv.style.display = "block";
    } else {
        navUserDiv.classList.remove("show");
        userDiv.style.display = "none";
    }
}

document.addEventListener("click", function (event) {
    const userMenu = document.getElementById("user");
    const navUserDiv = document.getElementById("navUser");

    if (!event.target.closest("#user") && !event.target.closest("#navUser")) {
        navUserDiv.classList.remove("show");
        userMenu.style.display = "none";
    }
});

document.addEventListener("click", function (event) {
    const smileMenu = document.getElementById("smile");
    const lightningMenu = document.getElementById("lightning");
    const userMenu = document.getElementById("user");

    if (!event.target.closest("#smile") && !event.target.closest("#navSmile")) {
        smileMenu.style.display = "none";
    }

    if (!event.target.closest("#lightning") && !event.target.closest("#navLightning")) {
        lightningMenu.style.display = "none";
    }

    if (!event.target.closest("#user") && !event.target.closest("#navUser")) {
        userMenu.style.display = "none";
    }
});
