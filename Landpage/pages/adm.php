    <?php

    include("./../Source/php/connection.php");


    $connection;
    $query = "SELECT nome,titulo,descricao FROM page";
    $result = [100];
    $dados = mysqli_query($connection, $query);
    $n = 0;




    # variaveis globais para o retorno da edicao#
    $data_home_title;
    $data_home_descriction;

    $data_about_title;
    $data_about_descriction;

    $data_service_title;
    $data_service_descriction;

    $data_contacts_title;
    $data_contacts_descriction;
    #*****************************************


    if ($dados) {

        $id = 0;


        while ($registro = mysqli_fetch_assoc($dados)) {


            echo ($id . $registro['nome'] . '<br>');

            if ($id == 1) {

                $data_home_title = $registro['titulo'];
                $data_home_descriction = $registro['descricao'];
            }

            if ($id == 2) {

                $data_sobre_title = $registro['titulo'];
                $data_sobre_descriction = $registro['descricao'];
            }

            if ($id == 3) {

                $data_service_title = $registro['titulo'];
                $data_service_descriction = $registro['descricao'];
            }


            if ($id == 4) {

                $data_contacts_title = $registro['titulo'];
                $data_contacts_descriction = $registro['descricao'];
            }




            $id++;
        }
    }


    $page_name = "loucura do php";
    $page_title;
    $page_descriction;



    if (!empty($_POST['title'])) {

        update_select_edit($_POST['name-page'], $_POST['title'], $_POST['descriction']);
    }

    function update_select_edit($nome, $titulo, $descricao)
    {
        include("./../Source/php/connection.php");

        $query = "UPDATE page SET titulo='$titulo',descricao='$descricao' where nome='$nome'";

        $response = mysqli_query($connection, $query);

        header("location:./login.php");
    }





    /*editar dados de texto da pagina */




    ?>



    <!DOCTYPE html>
    <html lang="pt">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admn</title>
    </head>

    <body>

        <style>
            @import url("./../Source/styles/config.css");

            .list-tool {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
                width: 100%;


            }

            .list-tool div {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                background: var(--color-A2);
                border: 1px solid black;
                color: var(--color-D2);

                width: 200px;
                height: 200px;
                margin: 16px;

                &:active {

                    scale: 1.3;

                }

                & img {
                    padding: 8px;
                    background: var(--color-D2);
                    border-radius: 100%;
                }

            }

            .edit-tool-text {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;



                & label {
                    color: var(--color-A2);
                    text-align: left;
                    font-size: 16px;


                    width: 300px;
                }

                & form {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    font-size: 24px;
                    width: 600px;
                    padding: 32px;
                    background: linear-gradient(var(--color-D1), var(--color-D2));
                    margin: 16px;
                    border-radius: 1em;
                }



            }

            #name-page {
                width: 300px;
                height: 32px;
                padding: 8px;
                background: linear-gradient(var(--color-A2), var(--color-D2));
                border-radius: 0.4em;
                color: var(--color-D1);
            }

            #box-text {
                resize: none;
                border: 1px solid black;
                border-radius: 0.4em;
                width: 300px;
                padding: 16px;
                font-size: 16px;
            }

            .option-button {

                display: flex;
                align-items: center;
                justify-content: center;
                margin: 16px;


                & button {
                    cursor: pointer;
                    height: 48px;
                    width: 128px;
                    padding: 8px;
                    margin: 8px;
                    font-size: 16px;
                    background-color: var(--color-D2);
                    color: white;
                    border-radius: 1em;

                    &:hover {
                        background-color: var(--color-D1);
                    }
                }

                & button[type="submit"] {
                    background-color: var(--color-B2);

                    &:hover {
                        background-color: var(--color-B1);
                    }
                }
            }
        </style>


        <main>


            <section>

                <div class="title-section">
                    <h1>Area do administrador</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates ducimus deserunt quas eligendi laborum dignissimos autem praesentium quos, voluptatem excepturi eaque ipsum, labore nobis veniam repudiandae incidunt nisi voluptate quisquam?</p>
                </div>

                <div class="list-tool">
                    <div>
                        <img src="./../Assets/icons/amd0.svg" alt="">
                        <h1>atualizar dados</h1>

                    </div>
                    <div>
                        <img src="./../Assets/icons/adm4.svg" alt="">
                        <h1>seguranca</h1>
                    </div>
                    <div>
                        <img src="./../Assets/icons/adm3.svg" alt="">
                        <h1>contas</h1>
                    </div>
                    <div>
                        <img src="./../Assets/icons/adm2.svg" alt="">
                        <h1>definicoes</h1>

                    </div>
                </div>


                <div class="edit-tool-text">


                    <form method="post">

                        <label for="name-page">Selecione a pagina</label>

                        <select name="name-page" id="name-page" required>
                            <option value="home">Home</option>
                            <option value="sobre">Sobre</option>
                            <option value="servicos">Servicos</option>
                            <option value="contactos">Contactos</option>
                        </select>


                        <label for="box-text">Editar texto inicial do site</label>
                        <textarea name="title" id="box-text" required></textarea>
                        <label for="box-text">descricao</label>
                        <textarea name="descriction" id="box-text" required></textarea>

                        <div class="option-button">

                            <button type="submit">confirmar</button>
                            <button type="reset">cancelar</button>

                        </div>





                    </form>



                </div>
            </section>

        </main>



        <script>
            let form_page_name = document.querySelector("#name-page")
            let form_page_title = document.querySelectorAll("#box-text")



            form_page_name.addEventListener("change", function() {





                if (form_page_name.value == 'home') {

                    alert('<?= $data_home_title ?>')
                    form_page_title.textContent = "<?= $data_home_title ?>"
                }






            })
        </script>
    </body>

    </html>