          <?php
          include("./../Source/php/connection.php");

          /*variaveis globais */
          $title;
          $descriction;

          $query = "SELECT * from page where nome='sobre'";
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
            <title>sobre</title>

            <link rel="stylesheet" href="./../Source/styles/sobre.css" />
          </head>

          <body>

            <!-- cabeçalho do meu site -->

            <?php

            include("./../Source/php/header.php")
            ?>
            <!-- fim cabeçalho -->
            <main>
              <section id="sobre">
                <div class="title-section">
                  <h1><?= $title ?></h1>
                  <p>
                    <?= $descriction ?>
                  </p>
                </div>
                <!-- fim quem somos -->
                <br><br>
                <div class="subtitle-section">
                  <h2>"Visao - Missao - Valores"</h2>
                </div>
                <!-- fim  -->

                <div class="lista-item">
                  <div class="item">
                    <img src="./../Assets/icons/visao.svg" alt="" />
                    <h1>Visão</h1>
                    <p>
                      A nossa visão é ser líder, além, pela transformação dos objectivos
                      estratégicos da nossa organização em resultados efectivos
                    </p>
                  </div>
                  <div class="item">
                    <img src="./../Assets/icons/missao.svg" alt="" />
                    <h1>Missão</h1>
                    <p>
                      Estando vocacionado para as regiões, a nossa missão é satisfazer
                      as comunidades nelas inseridas permitindo resolver cada desafio
                      com soluções seguras, fiáveis e inovadoras, acreditando nas
                      valências ou competências e motivação do pessoal e objectivando o
                      desenvolvimento sustentável da da organização.
                    </p>
                  </div>

                  <div class="item">
                    <img src="./../Assets/icons/valores.svg" alt="" />
                    <h1>Valores</h1>
                    <p>
                      Quanto aos valores queremos primar pela: Ética e profissionalismo
                      Competitividade Engajamento e determinação em continuar a servir
                      as regiões Cumprimento dos requisitos legais e normativos
                      obrigatórios Compromisso com o desenvolvimento sustentável das
                      regiõe
                    </p>
                  </div>
                </div>
              </section>
              <!-- fim sobre -->
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