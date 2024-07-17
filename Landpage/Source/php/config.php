
    <?php

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];



    if (!empty($nome) && !empty($senha)) {



        verifyLogin($nome, $senha);
    }


    function verifyLogin($name, $pass)
    {


        include("./connection.php");

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


