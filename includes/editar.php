<a href="./" class="ui blue button"><i class="reply icon"></i></a>
<?php if (isset($_GET['edit']) && $_GET['edit'] == true): ?>
<?php
$user = new Acme\Models\UserModel;
$userEncontrado = $user->findBy('idusers',$_GET['id']);

 ?>

<form class="ui form" method="post" action="./">
<div class="field">
  <label>Nome</label>
  <input type="text" name="nome" value="<?php echo $userEncontrado->nome; ?>">
  <input type="hidden" name="atualizar">
  <input type="hidden" name="id" value="<?php echo $userEncontrado->idusers; ?>">
</div>

<div class="field">
  <label>E-mail</label>
<input type="text" name="email" value="<?php echo $userEncontrado->email; ?>">

</div>

<div style="margin-top: 10px;">
  <button class="ui blue button" type="submit" name="button"><i class="check green icon"></i>Atualizar</button>
</div>
</form>
<?php else: ?>
  Escolha um Utilizador antes Editar
<?php endif; ?>
