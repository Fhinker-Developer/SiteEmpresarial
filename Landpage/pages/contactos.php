          <?php
          include("./../Source/php/connection.php");

          /*variaveis globais */
          $title;
          $descriction;

          $query = "SELECT * from page where nome='contactos'";
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
            <title>Contactos</title>
            <link rel="stylesheet" href="./../Source/styles/contactos.css" />
          </head>

          <body>


            <!-- cabeçalho do meu site -->

            <?php

            include("./../Source/php/header.php")
            ?>
            <!-- fim cabeçalho -->
            <main>
              <section id="contactos">
                <div class="title-section">
                  <h1><?= $title ?></h1>
                  <p>
                    <?= $descriction ?>
                  </p>
                </div>

                <div class="content">

                  <div class="info-group">


                    <div class="card">

                      <apan class="icon">
                        <img src="./../Assets/icons/telefone.svg" alt="">
                        <h1>telemovel</h1>
                        </span>

                        <ul>
                          <li>932809844</li>
                        </ul>
                    </div>
                    <!-- fim card-tel -->
                    <div class="card">

                      <apan class="icon">
                        <img src="./../Assets/icons/email.svg" alt="">
                        <h1>email</h1>
                        </span>

                        <ul>
                          <li>devcefas@gmail.com</li>
                        </ul>
                    </div>
                    <!-- fim card-tel -->
                    <div class="card">

                      <apan class="icon">
                        <img src="./../Assets/icons/gps.svg" alt="">
                        <h1>localidades</h1>
                        </span>

                        <ul>
                          <li>soyo</li>
                        </ul>
                    </div>
                    <!-- fim card-tel -->




                  </div>
                  <!-- content -info group -->

                  <div class="form-group">
                    <form action="" method="post">
                      <h1>Fale conosco</h1>
                      <input type="email" name="email" required placeholder="Insira o seu email" />
                      <input type="text" name="nome" placeholder="Insira seu nome" required />

                      <textarea name="message" placeholder="escreve aqui" required></textarea>
                      <input type="submit" name="ok" />
                    </form>
                  </div>
                  <!-- fim form group -->
                </div>
                <!-- fim content -->
              </section>
              <!-- fim contactos -->
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