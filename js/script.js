document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector("header");
    const limiteParaDesaparecer = 100; // Quantidade de pixels rolados para desaparecer
    const limiteParaReaparecer = 1; // Quantidade mínima de pixels rolados para que o menu reapareça
    let ultimaPosicao = window.scrollY;
    let escondido = false;

    window.addEventListener("scroll", function () {
        let atualPosicao = window.scrollY;

        if (atualPosicao > limiteParaDesaparecer && !escondido) {
            // Rolando para baixo: esconder o menu
            header.classList.add("escondido");
            escondido = true;
        } else if (atualPosicao < ultimaPosicao - limiteParaReaparecer && escondido) {
            // Rolando para cima: mostrar o menu se rolou mais de "limiteParaReaparecer" pixels
            header.classList.remove("escondido");
            escondido = false;
        }

        ultimaPosicao = atualPosicao;
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");
    const navMenu = document.querySelector("nav ul");

    menuToggle.addEventListener("click", function () {
        navMenu.classList.toggle("active");
    });
});

