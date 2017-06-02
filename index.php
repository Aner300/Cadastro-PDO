<?php require 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-PT">
  <head>
    <meta charset="utf-8">
    <title>Cadastro PDO</title>
    <link rel="stylesheet" href="public/assets/css/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css">
  </head>
  <body>
    <div style="width: 800px;margin: 0 auto;">

    </div>
<?php
      $conn = new Asw\Database\Connection;
?>
<form class="ui form">
 <h4 class="ui dividing header">Informações Pessoais</h4>
 <div class="field">
   <label>Nome</label>
   <div class="two fields">
     <div class="field">
       <input name="shipping[first-name]" placeholder="First Name" type="text">
     </div>
     <div class="field">
       <input name="shipping[last-name]" placeholder="Last Name" type="text">
     </div>
   </div>
 </div>
 <div class="ui button" tabindex="0">Submit Order</div>
</form>
    <script type="text/javascript" src="public/assets/js/semantic.min.js"></script>
  </body>
</html>
