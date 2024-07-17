  <style>
      footer {

          width: 100%;
          bottom: 0;
          padding: 32px;

          background: var(--color-D1);

          display: flex;

          align-items: center;
          justify-content: center;
          flex-wrap: wrap;

          gap: 24px;

          & div {
              display: flex;
              flex-direction: column;
              justify-content: center;
              gap: 8px;
              width: 10em;
              border-radius: 5em;

              & a {
                  color: cadetblue;
                  border: 1px solid cadetblue;
                  text-align: center;
              }

              & ul {
                  top: 1em;
                  text-align: center;
                  background: none;

                  & li {
                      background: none;
                      color: var(--color-A2);
                      font-size: 16px;

                      & a {
                          border: none;
                      }
                  }
              }

              & p {
                  width: 90%;
                  left: 1em;
                  color: var(--color-A2);
              }

              & h1 {
                  text-align: center;
                  font-size: 20px;
                  color: var(--color-D2);
              }
          }
      }
  </style>

  <footer>
      <div class="contacte-nos">
          <h1>contacte-nos</h1>
          <ul>
              <li>932809844</li>
              <li>954338790</li>
          </ul>
      </div>
      <!-- fim -->
      <div class="redes-socias">
          <h1>redes-socias</h1>
          <ul>
              <li><a href="">facebook</a></li>
              <li><a href="">linkedin</a></li>
          </ul>
      </div>
      <!-- fim -->
      <div class="encontre-nos">
          <h1>encontre-nos</h1>
          <ul>
              <li>luanda</li>
              <li>Zaire</li>
              <li>Soyo</li>
          </ul>
      </div>
      <!-- fim -->
      <div class="mais">
          <h1>mais</h1>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iusto..</p>

          <a href="<?= BASE_URL ?>login.php">iniciar login</a>
      </div>
      <!-- fim -->
  </footer>

  <script src="<?= SCRIPT_PATH ?>main.js"></script>