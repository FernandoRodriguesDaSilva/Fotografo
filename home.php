<?php
session_start();
if (!isset($_SESSION["logado"])) {
  header("location:login.php");
}
?>
<!doctype html>

<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Richard's " autor="Fernando Rodrigues da Silva">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>home</title>
  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="images/android-desktop.png">

  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/materialize.min.css">
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
  <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
    <main class="mdl-layout__content">
      <div class="demo-blog__posts mdl-grid">
        <!-- Aniversários -->
        <div class="mdl-card aniver-pic mdl-cell mdl-cell--12-col">
          <div class="mdl-card__media mdl-color-text--grey-50">
            <h3><a href="aniversario.php">Aniversários</a></h3>
          </div>
          <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
            <div class="minilogo"></div>
            <div class="mdl-color-text--grey-600 mdl-card__supporting-text">
              Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
            </div>
            <a href="aniversario.php" class="waves-effect waves-light btn">Mais</a>
          </div>
        </div>
        <!-- Eventos -->
        <div class="mdl-card evento-pic mdl-cell mdl-cell--12-col">
          <div class="mdl-card__media mdl-color-text--grey-50">
            <h3><a href="evento.php">Eventos</a></h3>
          </div>
          <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
            <div class="minilogo"></div>
            <div class="mdl-color-text--grey-600 mdl-card__supporting-text">
              Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
            </div>
            <a href="evento.php" class="waves-effect waves-light btn">Mais</a>
          </div>
        </div>

        <div class="mdl-card amazing mdl-cell mdl-cell--12-col">
          <div class="text-center mdl-card__title mdl-color-text--grey-50">
            <h3 class="quote">“Qual das minhas fotografias é a minha favorita? <br>Aquela que farei amanhã.”<br><br>
            Imogen Cunningham</h3>
          </div>
          <div class="mdl-card__supporting-text mdl-color-text--grey-600">
            Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
          </div>
        </div>

        <!-- casamento -->

        <div class="mdl-card shopping mdl-cell mdl-cell--12-col">
          <div class="mdl-card__media mdl-color-text--grey-50">
            <h3><a href="casamento.php">Casamentos</a></h3>
          </div>
          <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
            <div class="minilogo"></div>
            <div class="mdl-color-text--grey-600 mdl-card__supporting-text">
              Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
            </div>
            <a href="casamento.php" class="waves-effect waves-light btn">Mais</a>
          </div>
        </div>
        <!-- formaturas  -->
        <div class="mdl-card on-the-road-again mdl-cell mdl-cell--12-col">
          <div class="mdl-card__media mdl-color-text--grey-50">
            <h3><a href="formatura.php">Formaturas</a></h3>
          </div>
          <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
            <div class="minilogo"></div>
            <div class="mdl-color-text--grey-600 mdl-card__supporting-text">
              Enim labore aliqua consequat ut quis ad occaecat aliquip incididunt. Sunt nulla eu enim irure enim nostrud aliqua consectetur ad consectetur sunt ullamco officia. Ex officia laborum et consequat duis.
            </div>
            <a href="formatura.php" class="waves-effect waves-light btn">Mais</a>
          </div>
        </div>
        <div class="valign-wrapper center-align text-center">
          <a href="entry.php" class="waves-effect waves-light btn-large">Sobre mim ...</a>
        </div>
      </div>
      <footer class="mdl-mini-footer">
        <div class="mdl-mini-footer--left-section">
          <button class="mdl-mini-footer--social-btn social-btn social-btn__blogger">
            <span class="visuallyhidden">Facebook</span>
          </button>
        </div>
      </footer>
    </main>
    <div class="mdl-layout__obfuscator"></div>
  </div>
  <script src="js/material.min.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/materialize.js"></script>
</body>
<script>
  Array.prototype.forEach.call(document.querySelectorAll('.mdl-card__media'), function(el) {
    var link = el.querySelector('a');
    if(!link) {
      return;
    }
    var target = link.getAttribute('href');
    if(!target) {
      return;
    }
    el.addEventListener('click', function() {
      location.href = target;
    });
  });
</script>
</html>
