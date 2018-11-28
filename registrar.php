<?php include_once ("includes/header.php"); ?>
  <div class="row container">
    <form action="conexao/validando_registro.php" method="post" class="col s12">
       <?php
      if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        session_unset();
      }
      ?>
      <div class="row">
       <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input name="nome" id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nome</label>
        </div>
        <div class="input-field col s6">
          <input name="sobrenome" id="last_name" type="text" class="validate">
          <label for="last_name">Sobrenome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">phone</i>
          <input name="telefone" id="telefone" type="text" class="validate">
          <label for="email">Telefone</label>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mail_outline</i>
          <input name="email" id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div> 
      <div class="row">
        <div class="input-field col s12">
           <i class="material-icons prefix">vpn_key</i>
          <input name="senha" id="password" type="password" class="validate">
          <label for="password">Senha</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field text-center col col-sm-12  ">
            <input type="submit" value="cadastrar" class="btn blue waves-effect">
        </div>
      </div>

    </form>
  </div>
      

 <?php include_once('includes/footer.php'); ?>       

 

