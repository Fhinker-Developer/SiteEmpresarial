<?php
define("BASE_URL", '/Dev/Landpage/pages/');
define('IMAGE_PATH', '/Dev/Landpage/Assets/icons/');
define("SCRIPT_PATH", '/Dev/Landpage/Source/js/');

?>


<style>
    header {
        z-index: 100;
        top: 0;
        position: fixed;
        display: grid;
        grid-template-columns: 40% auto;
        justify-content: first baseline;
        align-items: center;
        gap: 16px;
        width: 100%;
        height: 96px;
        background: var(--color-B1);
         /* background: linear-gradient(190deg,var(--color-B2),var(--color-B1)); */
    }

    header .logo {
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        gap: 8px;
        width: 100%;
        height: 32px;
    }

    header nav {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 32px;
        text-align: center;
        height: 32px;
        width: 100%;
    }

    header nav a {
        color: white;

        &:hover {
            color: var(--color-B2);
        }
    }

    header .logo h1 {
        display: inline;
        color: var(--color-A2);
    }

    header .logo #b {
        color: var(--color-B2);
    }

    header span {
        display: none;
    }

    header .logo img {
        animation: animationLoader 2s linear infinite;
    }

    @media (max-width: 590px) {
        header {
            display: grid;
            grid-template-columns: 50% 50%;
        }

        header .logo {
            left: 1em;
        }

        header nav {
            position: absolute;
            background: inherit;
            top: 0;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

            height: 100vh;
            width: 100vw;
            animation: animatio_open_menu 1s linear;
        }

        header span {
            display: flex;
            width: 48px;
            height: 48px;
            padding: 8px;

            position: absolute;
            right: 1em;


            & img:active {
                background: var(--color-A2);
            }
        }

        header .menu-closed {
            transition: 1s linear;

            animation: animatio_close_menu 1s linear;

            height: 0;
            overflow: hidden;
        }
    }

    #button-theme-site {
        appearance: none;
        cursor: pointer;
        width: 32px;
        height: 32px;
        border-radius: 100%;
        background: url("<?= IMAGE_PATH ?>luz.svg") center;
        background-size: 32px;

        &:checked {
            background: url("<?= IMAGE_PATH ?>escuro.svg") center;
            background-size: 32px;
        }

        &:hover {
            background-color: var(--color-B2);
        }
    }

    @keyframes animationLoader {
        from {
            rotate: 0deg;
        }

        to {
            rotate: 360deg;
        }
    }
</style>



<header>
    <div class="logo">
        <h1 id="a">Mav</h1>
        <h1 id="b">Gest</h1>
        <img src="<?= IMAGE_PATH ?>icon2.svg" alt="" />
    </div>

    <nav class="menu-closed">
        <a href="/Dev/Landpage/">Home</a>
        <a href="<?= BASE_URL ?>sobre.php">Sobre</a>

        <a href="<?= BASE_URL ?>servicos.php">Serviços </a>

        <a href="<?= BASE_URL ?>contactos.php">Contactos</a>

        <input type="checkbox" id="button-theme-site" />
    </nav>

    <span class="button-menu-android">
        <img src="<?= IMAGE_PATH ?>menu.svg" alt="" />
    </span>
</header>


<script>
    let painel_menu = document.querySelector("header nav");
    let button_menu = document.querySelector("header span img");
    let links_menu = document.querySelectorAll("header nav a");

    /*verificar clique de cada link e fechar o menu */
    links_menu.forEach(function(btn) {
        btn.addEventListener("click", () => {
            menuAndroidOpen();
        });
    });

    /*clique no botao de menu android */
    button_menu.addEventListener("click", () => {


        menuAndroidOpen();
    });

    //botao menu android abrir e fechar
    function menuAndroidOpen() {
        if (painel_menu.classList.toggle("menu-closed") != true) {
            button_menu.src = "/Dev/Landpage/Assets/icons/close.svg";
        } else {
            button_menu.src = "/Dev/Landpage/Assets/icons/menu.svg";
        }
    }
</script>