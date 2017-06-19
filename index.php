<?php require 'config/config.php'; ?>

<?php

if (isset($_POST['atualizar'])){
  $user = new Acme\Models\UserModel;
  $atualizado = $user->update($_POST['id'],[
    'nome' => $_POST['nome'],
    'email' => $_POST['email']
  ]);

if($atualizado==1){
  $mnsagem = '<div class="ui success message">
<i class="close icon"></i>
<div class="header">
  Utilizador Atualizado com successo.
</div>
<p>Utilizador: "'.$_POST['nome'].'"</p>
</div>';
}

}

?>

<?php
if (isset($_POST['cadastrar']))
{
  $user = new Acme\Models\UserModel;
  $cadastrado = $user->create(
    [
    'nome'=> $_POST['nome'],
    'email'=> $_POST['email'],
    'senha'=> $_POST['senha']
  ]);

  if ($cadastrado) {
    $mensagem = '<div class="ui success message">
  <i class="close icon"></i>
  <div class="header">
    Utilizador Registado com successo.
  </div>
  <p>Utilizador: "'.$_POST['nome'].'"</p>
</div>';
  }
}

if (isset($_GET['apagar']) && $_GET['apagar'] == true) {
  $user = new Acme\Models\UserModel;
  $user->delete('idusers',$_GET['id']);
}


  ?>
  <?php echo(isset($mnsagem)) ? $mnsagem : ''; ?>

<!DOCTYPE html>
<html lang="pt-PT">
  <head>
    <meta charset="utf-8">
    <title>Cadastro PDO</title>
    <link rel="stylesheet" href="public/assets/css/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css">
  </head>
  <body>

  <div style="width:800px;margin: 0 auto;">
    <?php require (isset($_GET['p'])) ? 'includes/'.$_GET['p'].'.php' : 'includes/home.php'; ?>
  </div>


    <script type="text/javascript" src="public/assets/js/semantic.min.js"></script>
  </body>
</html>
