// variaveis constantes para o menu//

const theme_mode = document.querySelector("#theme-mode");
const button_theme_mode = document.querySelector("#button-theme-site");

let light_dark_theme_mode = 1;

//botao de mudar de tema(escuro ou luminado)
button_theme_mode.addEventListener("click", function () {
  light_dark_theme_mode *= -1;
  if (light_dark_theme_mode == -1) {
    document.querySelector("main").style.background = "var(--color-D2)";
    document.querySelector("*").style.color = "white";
  } else if (light_dark_theme_mode == 1) {
    document.querySelector("main").style.background = "white";
    document.querySelector("*").style.color = "black";
  }
});


