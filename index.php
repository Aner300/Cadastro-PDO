<?php require 'config/config.php'; ?>
<?php
$user = new Acme\Models\UserModel;
//$cadastrado=$user->create([
  //'nome' => 'Haziel',
  //'email' => 'haziel@gmail.com',
  //'senha' => '12345678'
  $deletado = $user->delete('idusers',1);

  dump($deletado);

//]);
?>
<!DOCTYPE html>
<html lang="pt-PT">
  <head>
    <meta charset="utf-8">
    <title>Cadastro PDO</title>
    <link rel="stylesheet" href="public/assets/css/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css">
  </head>
  <body>
    <?php
      $conn = new Asw\Database\Connection;
      $conn->connection();
    ?>
  <div style="width:800px;margin: 0 auto;">
    <?php require (isset($_GET['p'])) ? 'includes/'.$_GET['p'].'php' : 'includes/home.php'; ?>
  </div>


    <script type="text/javascript" src="public/assets/js/semantic.min.js"></script>
  </body>
</html>
