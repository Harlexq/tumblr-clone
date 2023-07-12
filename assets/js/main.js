function toggleSmileMenu() {
    const smileMenu = document.getElementById("smile");
    const lightningMenu = document.getElementById("lightning");

    smileMenu.style.display = smileMenu.style.display === "block" ? "none" : "block";
    lightningMenu.style.display = "none";
}

function toggleLightningMenu() {
    const smileMenu = document.getElementById("smile");
    const lightningMenu = document.getElementById("lightning");

    lightningMenu.style.display = lightningMenu.style.display === "block" ? "none" : "block";
    smileMenu.style.display = "none";
}

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
