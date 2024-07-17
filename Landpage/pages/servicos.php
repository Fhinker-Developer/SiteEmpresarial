          <?php
          include("./../Source/php/connection.php");

          /*variaveis globais */
          $title;
          $descriction;

          $query = "SELECT * from page where nome='servicos'";
          $dados = mysqli_query($connection, $query);

          if ($dados) {

            while ($result = mysqli_fetch_assoc($dados)) {

              $title = $result['titulo'];
              $descriction = $result['descricao'];
            }
          }


          mysqli_close($connection)

          ?>
          <!DOCTYPE html>
          <html lang="en">

          <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="stylesheet" href="./../Source/styles/servicos.css" />
            <title>Servicos</title>
          </head>

          <body>

            <!-- cabeçalho do meu site -->

            <?php

            include("./../Source/php/header.php")
            ?>
            <!-- fim cabeçalho -->
            <main>
              <section id="servicos">
                <div class="title-section">
                  <h1><?= $title ?></h1>
                  <p>
                    <?= $descriction ?>
                  
                  </p>
                </div>

                <div class="subtitle-section">
                  <h1>Nossos servicos</h1>

                </div>

                <div class="list-services">
                  <div class="service"></div>
                  <div class="service"></div>
                  <div class="service"></div>
                  <div class="service"></div>
                  <div class="service"></div>
                  <div class="service"></div>
                </div>
              </section>
              <!-- fim servicos -->
            </main>



            <!-- footer do meu site -->
            <br>
            <br>
            <br>
            <?php
            include("./../Source/php/footer.php")
            ?>
            <!-- fim footer -->
          </body>

          </html>