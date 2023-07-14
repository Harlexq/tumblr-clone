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

function toggleStoreMenu() {
    const storeDiv = document.getElementById("store");
    const navStoreDiv = document.getElementById("navStore");

    if (!navStoreDiv.classList.contains("show")) {
        navStoreDiv.classList.add("show");
        storeDiv.style.display = "block";
    } else {
        navStoreDiv.classList.remove("show");
        storeDiv.style.display = "none";
    }
}

document.addEventListener("click", function (event) {
    const storeMenu = document.getElementById("store");
    const navStoreDiv = document.getElementById("navStore");

    if (!event.target.closest("#store") && !event.target.closest("#navStore")) {
        navStoreDiv.classList.remove("show");
        storeMenu.style.display = "none";
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

function toggleEditor(editorId, closeButtonId, uploadClass) {
    var editor = document.getElementById(editorId);
    editor.style.display = "flex";
    document.body.style.overflow = "hidden";

    var closeButton = document.querySelector(closeButtonId);
    closeButton.addEventListener("click", function () {
        editor.style.display = "none";
        document.body.style.overflow = "auto";
    });

    if (uploadClass) {
        var uploadSection = document.querySelector(uploadClass);
        closeButton.addEventListener("click", function () {
            uploadSection.style.display = "none";
        });
    }
}

function toggleTextEditor() {
    toggleEditor("textEditor", ".btn-close");
}

function toggleImageEditor() {
    toggleEditor("fotografEditor", "#fotografEditor .btn-close");
}

function toggleQuoteEditor() {
    toggleEditor("alintiEditor", "#alintiEditor .btn-close");
}

function toggleLinkEditor() {
    toggleEditor("baglantiEditor", "#baglantiEditor .btn-close");
}

function toggleChatEditor() {
    toggleEditor("sohbetEditor", "#sohbetEditor .btn-close");
}

function toggleAudioEditor() {
    toggleEditor("sesEditor", "#sesEditor .btn-close", "#sesEditor .text-editor-upload");
}

function toggleVideoEditor() {
    toggleEditor("videoEditor", "#videoEditor .btn-close", "#videoEditor .text-editor-upload");
}

function CloseImageEditor() {
    const closeImageEditor = document.querySelector("#fotografEditor .text-editor-upload");
    closeImageEditor.style.display = "none";
}

function CloseLinkButton() {
    const closeImageEditor = document.querySelector("#baglantiEditor .text-editor-link");
    closeImageEditor.style.display = "none";
}

function CloseVoiceButton() {
    const closeImageEditor = document.querySelector("#sesEditor .text-editor-upload");
    closeImageEditor.style.display = "none";
}

function CloseVideoButton() {
    const closeImageEditor = document.querySelector("#videoEditor .text-editor-upload");
    closeImageEditor.style.display = "none";
}

var buttons = document.querySelectorAll('.lightning-menu button');

buttons.forEach(function (button) {
    button.addEventListener('click', function () {
        buttons.forEach(function (btn) {
            btn.classList.remove('active');
        });
        button.classList.add('active');
    });
});

var stores = document.querySelectorAll('.store-btn-flex button');

stores.forEach(function (button) {
    button.addEventListener('click', function () {
        stores.forEach(function (btn) {
            btn.classList.remove('active');
        });
        button.classList.add('active');
    });
});

var btnMenu = document.querySelectorAll('.user-btn-item');
var postOne = document.getElementById('postOne');
var postTwo = document.getElementById('postTwo');
var postThree = document.getElementById('postThree');
var postFour = document.getElementById('postFour');

btnMenu.forEach(function (button) {
    btnMenu[0].click();
    button.addEventListener('click', function () {
        btnMenu.forEach(function (btn) {
            btn.classList.remove('active');
        });
        button.classList.add('active');

        const buttonOne = button.textContent.trim();
        if (buttonOne === 'Senin İçin') {
            postOne.style.display = 'block';
            postTwo.style.display = 'none';
            postThree.style.display = 'none';
            postFour.style.display = 'none';
        }

        const buttonTwo = button.textContent.trim();
        if (buttonTwo === 'Takip edilenler') {
            postOne.style.display = 'none';
            postTwo.style.display = 'block';
            postThree.style.display = 'none';
            postFour.style.display = 'none';
        }

        const buttonThree = button.textContent.trim();
        if (buttonThree === 'Etiketlerin') {
            postOne.style.display = 'none';
            postTwo.style.display = 'none';
            postThree.style.display = 'block';
            postFour.style.display = 'none';
        }

        const buttonFour = button.textContent.trim();
        if (buttonFour === 'Yönet...') {
            postOne.style.display = 'none';
            postTwo.style.display = 'none';
            postThree.style.display = 'none';
            postFour.style.display = 'block';
        }
    });
});

