          <?php
          include("./Source/php/connection.php");

          /*variaveis globais */
          $title;
          $descriction;

          $query = "SELECT * from page where nome='home'";
          $dados = mysqli_query($connection, $query);

          if ($dados) {

            while ($result = mysqli_fetch_assoc($dados)) {

              $title = $result['titulo'];
              $descriction = $result['descricao'];
            }
          }

          mysqli_close($connection);
          ?>

          <!-- incio do html -->
          <!DOCTYPE html>
          <html lang="pt">

          <head>
            <meta charset="UTF-8" />
            <link rel="stylesheet" href="./Source/styles/index.css" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />

            <link rel="stylesheet" href="./Source/styles/escuro.css" id="theme-mode" />
            <title>MavGest</title>
          </head>

          <body>
            <!-- cabeçalho do meu site -->

            <?php
            include("./Source/php/header.php")
            ?>
            <!-- fim cabeçalho -->

            <!-- <div class="load"></div> -->

            <!-- main do meu site -->
            <main>
              <section id="home">
                <div class="title">

                  <h1>
                    <?= $title ?>
                  </h1>
                  <p>
                    <?= $descriction ?>
                  </p>
                </div>

                <div class="btn-more">
                  <button>Ver mais..</button>
                  <button>Contactar</button>
                </div>
              </section>
              <!-- fim home -->
            </main>
            <!-- fim main -->


            <!-- footer do meu site -->
            <br>
            <br>
            <?php
            include("./Source/php/footer.php")
            ?>
            <!-- fim footer -->
          </body>


          </html>