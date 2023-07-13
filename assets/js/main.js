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


function openQuitModal() {
    var modal = document.getElementById("quitModal");
    modal.style.display = "flex";
    document.body.style.overflow = "hidden";
}

function closeQuitModal() {
    var modal = document.getElementById("quitModal");
    modal.style.display = "none";
    document.body.style.overflow = "auto";
}

function confirmQuitModal() {
    closeQuitModal();
}

var modal = document.getElementById("quitModal");
modal.addEventListener("click", function (event) {
    event.stopPropagation();
});

function togglePencilModal() {
    var modal = document.getElementById("pencilModal");
    if (modal.style.display === "flex") {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    } else {
        modal.style.display = "flex";
        document.body.style.overflow = "hidden";
    }
}

window.addEventListener("click", function (event) {
    var modal = document.getElementById("pencilModal");
    if (event.target === modal) {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    }
});

document.addEventListener("click", function (event) {
    const smileMenu = document.getElementById("smile");
    const lightningMenu = document.getElementById("lightning");
    const userMenu = document.getElementById("user");
    const pencilModal = document.getElementById("pencilModal");

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

function toggleHeart(element) {
    if (element.classList.contains('active')) {
        element.style.color = "";
        element.classList.remove('active');
    } else {
        element.style.color = "red";
        element.classList.add('active');
    }
}

function metinToggleButton() {
    var textEditor = document.getElementById("textEditor");
    textEditor.style.display = "flex";
    document.body.style.overflow = "hidden";
}

function closeTextEditor() {
    var textEditor = document.getElementById("textEditor");
    textEditor.style.display = "none";
    document.body.style.overflow = "auto";
}

var closeButton = document.querySelector(".btn-close");
closeButton.addEventListener("click", closeTextEditor);

function FotografToggleButton() {
    var fotografEditor = document.getElementById("fotografEditor");
    fotografEditor.style.display = "flex";
    document.body.style.overflow = "hidden";
}

function closeFotografEditor() {
    var fotografEditor = document.getElementById("fotografEditor");
    fotografEditor.style.display = "none";
    document.body.style.overflow = "auto";
}

var closeButton = document.querySelector("#fotografEditor .btn-close");
closeButton.addEventListener("click", closeFotografEditor);

var closeButton = document.querySelector(".fa-x");

closeButton.addEventListener("click", function () {
    var uploadSection = document.querySelector(".text-editor-upload");
    uploadSection.style.display = "none";
});
