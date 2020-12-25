// define language reload anchors
var dataReload = document.querySelectorAll("[data-reload]");

// language translation
var language = {
    eng: {
        welcome: "Welcome To Our Shop!",
    },
    idn: {
        welcome: "Selamat Datang di Toko Kami!",
    },
};

// define language via window hash
if (window.location.hash) {
    if (window.location.hash === "#idn") {
        hi.textContent = language.idn.welcome;
    }
}

// define language reload onclick illiteration
for (i = 0; i <= dataReload.length; i++) {
    dataReload[i].onclick = function () {
        location.reload(true);
    };
}
