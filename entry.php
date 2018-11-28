
<?php
session_start();
if (!isset($_SESSION["logado"])) {
  header("location:login.php");

}?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sobre mim</title>
  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">
  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Material Design Lite">
  <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#3372DF">
  <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
  <link rel="stylesheet" href="css/material.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <style>
  #view-source {
    position: fixed;
    display: block;
    right: 0;
    bottom: 0;
    margin-right: 40px;
    margin-bottom: 40px;
    z-index: 900;
  }
</style>
</head>
<body>
  <div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
    <main class="mdl-layout__content">
      <div class="demo-back">
        <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="home" title="go back" role="button">
          <i class="material-icons" role="presentation">arrow_back</i>
        </a>
      </div>
      <div class="demo-blog__posts mdl-grid">
        <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
          <div class="mdl-card__media mdl-color-text--grey-50">
            <h3>Um pouco sobre mim</h3>
          </div>
          <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
            <div class="minilogo"></div>
            <div>
              <strong>Atualizado</strong>
              <span>2 dias atrás</span>
            </div>
            <div class="section-spacer"></div>
            <div class="meta__favorites">
              425 <i class="material-icons" role="presentation">favorite</i>
              <span class="visuallyhidden">favorites</span>
            </div>
            <div>
              <i class="material-icons" role="presentation">bookmark</i>
              <span class="visuallyhidden">bookmark</span>
            </div>
            <div>
              <i class="material-icons" role="presentation">share</i>
              <span class="visuallyhidden">share</span>
            </div>
          </div>
          <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
            <p>&nbsp;</p>
            <div class="col s12 m8 offset-m2">
              <h4 class="grey-text">lorem ipsum</h4>
              <p>
                <strong><span class="blue-text">Lorem ipsum dolor sit</span></strong> amet, consectetur adipisicing elit. Itaque exercitationem vel tenetur, voluptas, neque enim, suscipit nisi eos deleniti eius quibusdam nesciunt deserunt officia natus corrupti, eum voluptate inventore iure!<br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. In veniam vel magnam impedit voluptatum architecto dolor itaque, ad aliquam doloremque totam perspiciatis aspernatur iusto blanditiis, non, neque exercitationem sit odit!
              </p>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, nisi, reiciendis dolorum ipsum libero doloremque saepe et ipsa quis minus incidunt nihil. Laudantium provident, corporis doloribus, eaque sequi magnam cum.
              </p>
              <p>&nbsp;</p>
              <h4 class="grey-text">Principais Eventos</h4>
              <p>
                <strong><span class="blue-text">São Paulo Fashion Week</span></strong><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet voluptatum beatae ex quam.
              </p>

              <p>
                <strong><span class="blue-text">Feira do Automóvel de São Paulo</span></strong><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet voluptatum beatae ex quam.
              </p>

              <p>
                <strong><span class="blue-text">Festival de Música em Orlando</span></strong><br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet voluptatum beatae ex quam.
              </p>
            </div>
          </div>
          <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">

            <!-- Inserindo uma action e o method post -->
            <form action="conexao/inserir_comentario.php" method="post">
              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

                <!-- Pegando o name comentario para inserir no banco -->
                <textarea rows=1 class="mdl-textfield__input" name="comentario" placeholder="Deixe seu comentário" ></textarea>


              </div>
              <input type="submit" value="comentar" class="btn blue" name="validar" >
            </form>


            <div class="comment mdl-color-text--grey-700">
              <table class="striped">
                <thead class="comment__header">
                  <td>Comentários</td>
                </thead>
                <tbody class="comment__text">
                 <?php include_once "conexao/ler_comentario.php"; ?>
               </tbody>
             </table>
           </div>
         </div>
       </div>
       <nav class="demo-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col">
        <a href="index.html" class="demo-nav__button">
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
            <i class="material-icons">arrow_back</i>
          </button>
          Anterior
        </a>
        <div class="section-spacer"></div>
        <a href="index.html" class="demo-nav__button">
          Depois
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900" role="presentation">
            <i class="material-icons">arrow_forward</i>
          </button>
        </a>
      </nav>
    </div>
    <footer class="mdl-mini-footer">
      <div class="mdl-mini-footer--left-section">
        <button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">
          <span class="visuallyhidden">Facebook</span>
        </button>
      </div>
    </footer>
  </main>
</div>
<div class="mdl-layout__obfuscator"></div>
</div>
<script src="js/material.min.js"></script>
</body>
</html>
