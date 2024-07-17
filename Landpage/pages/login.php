<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];


if (!empty($nome) && !empty($senha)) {


    verifyLogin($nome, $senha);
}


function verifyLogin($name, $pass)
{


    include("./../Source/php/connection.php");

    $query_select = "select nome,senha from users";
    $dados = mysqli_query($connection, $query_select);

    if ($dados) {


        while ($result = mysqli_fetch_assoc($dados)) {



            if ($name == $result['nome'] && $pass == $result['senha']) {

                header("location: /Dev/Landpage/pages/adm.php");

                return;
            } else {
                echo ("
                               
                                    <div class='popup-alert'>
                                        <h1>alerta!</h1>
                                        <p>palavra passe ou senha errada..</p>
                                        <button>voltar a tentar</button>
                                    </div>
                              ");
            }
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<style>
    @import url("./../Source/styles/colors.css");

    * {
        position: relative;
        padding: 0;
        margin: 0;
        outline: none;
        box-sizing: content-box;
        border: none;
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        overflow: hidden;
        display: flex;
        justify-content: center;
        height: 100vh;
        width: 100vw;


    }

    .form-screen {
        top: 4em;
        width: 500px;
        height: 60%;

        box-shadow: 0 0 4px 0.5px rgba(0, 0, 0, 0.293);
        border-radius: 1em;
        display: flex;
        justify-content: center;
        background: var(--color-D1);
    }

    form {
        top: 10%;
        width: 100%;
        height: 70%;
        display: flex;
        align-items: center;
        flex-direction: column;
        gap: 8px;
    }

    input {
        font-size: 16px;
        padding: 8px;
        width: 70%;
        height: 32px;
        padding-left: 16px;

        border: 1px solid rgba(0, 0, 0, 0.293);
        border-radius: 0.5em;


    }

    input[type="submit"] {
        transition: 0.3s linear;

        background: var(--color-D2);
        color: white;
        border-radius: 0.5em;

        &:hover {
            background: var(--color-B2);
        }

        &:active {
            transform: scale(1.3);
        }
    }

    .logo {
        font-family: Arial, Helvetica, sans-serif;
        display: flex;
        text-align: center;
        justify-content: center;
        align-items: center;
        gap: 8px;
        width: 100%;
        height: 32px;
    }

    .logo h1 {
        display: inline;
        color: white;
        color: var(--color-D2);

    }

    .logo #b {
        color: var(--color-B2);
    }

    .logo img {
        animation: animationRotate infinite linear 1s;
    }

    .options {
        top: 32px;
        width: 70%;
        height: 32px;
        display: flex;
        justify-content: space-between;
        align-items: center;


        & a {

            color: var(--color-A2);

            &:hover {
                color: var(--color-D2);
            }
        }

    }

    .popup-alert {
        top: 10em;
        position: absolute;
        display: flex;
        align-items: center;
        flex-direction: column;
        width: 228px;
        height: 228px;
        border-radius: 0.4em;
        box-shadow: 0 0 4px 0.5px rgba(0, 0, 0, 1.293);
        z-index: 100;
        border: 1px solid black;


        &::after {
            position: absolute;
            translate: 0vw;
            top: -50vh;

            width: 100vw;
            height: 100vh;
            display: block;
            content: "ddddddd";
            background: transparent;
            backdrop-filter: blur(30px);
            z-index: -1;
        }

        & h1 {
            width: 100%;
            text-align: center;
            background: var(--color-B2);
            color: white;
        }

        & p {

            width: 100%;
            height: 100%;
            text-align: center;
            background: white;
        }

        & button {
            position: absolute;
            bottom: 10px;
            height: 32px;
            padding: 8px;
            border-radius: 0.4em;
            background: var(--color-B2);
            color: white;
            font-size: 16px;



        }

    }

    @keyframes animationRotate {
        from {
            rotate: 0deg;
        }

        to {
            rotate: 360deg;
        }
    }
</style>

<body>

    <div class="form-screen">

        <form method="post">
            <img src="./../Assets/icons/login.svg" alt="login">

            <div class="logo">
                <h1 id="a">Mav</h1>
                <h1 id="b">Gest</h1>
                <img src="./../Assets/icons/icon2.svg" />
            </div>




            <input type="text" placeholder="digite o nome" name="nome" required>
            <input type="password" placeholder="digite a senha" name="senha" required>
            <input type="submit" value="entrar">


            <div class="options">
                <a href="#">perdir os dados</a>
                <a href="/Dev/Landpage/">sair</a>
            </div>




        </form>


    </div>







    <script>
        let contin = document.querySelector("button")
        let modal = document.querySelector('.popup-alert')

        contin.addEventListener("click", () => {

            modal.remove()
        })
    </script>

</body>

</html>