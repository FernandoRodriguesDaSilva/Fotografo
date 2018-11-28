<?php session_start();
include_once ("includes/header.php"); 
?>
<main>
  <center>
   <?php
   if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    session_unset();
  }
  ?>
  <?php if (isset($mensagem)) {?>
    <p style='color: red; font-size: 1.5em; font-weight: 700; margin-bottom: 2em;' class="text-center"><?php echo $mensagem ?></p>
  <?php }?>
  <div class="section"></div>

  <div class="container">
    <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

      <form class="col s12" method="post" action="conexao/logar.php">
        <div class='row'>
          <div class='col s12'>
          </div>
        </div>

        <div class='row'>
          <div class='input-field col s12'>
            <i class="material-icons prefix">email</i>
            <input class='validate' type='email' name='email' id='email' />
            <label for='email'>Entre com seu email</label>
          </div>
        </div>

        <div class='row'>
          <div class='input-field col s12'>
            <i class="material-icons prefix">lock_open</i>
            <input class='validate' type='password' name='senha' id='password' />
            <label class="text-center" for='password'>Digite sua senha</label>
          </div>
          <label style='float: right;'>
            <a class='pink-text' href='#!'><b>esqueceu a senha ?</b></a>
          </label>
        </div>

        <br />
        <center>
          <div class='row'>
            <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect green'>Login</button>
          </div>
        </center>
      </form>
    </div>
  </div>
  <a href="registrar.php">Criar uma conta</a>
</center>

<div class="section"></div>
<div class="section"></div>
</main>

<?php include_once('includes/footer.php'); ?>  