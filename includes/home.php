<h2 style="color: green;"><span class="icon-user-plus"></span>Registar Utilizador</h2>

<?php
    echo (isset($mensagem)) ? $mensagem : '';
 ?>

<form class="ui form" action="" method="post">
<div class="field">
  <label>Nome</label>
  <input type="text" name="nome" placeholder="Digite o seu nome">
  <input type="hidden" name="cadastrar">
</div>

<div class="field">
  <label>E-mail</label>
  <input type="text" name="email" placeholder="Digite o seu email">
</div>

<div class="field">
  <label>Senha</label>
  <input type="password" name="senha">
</div>

<div style="margin-top: 10px;">
  <button class="ui blue button" type="submit" name="button"><i class="check green icon"></i>Cadastrar</button>
</div>
</form>

<div class="ui divider"></div>
<h2 style="color: green;"><i class="users icon"></i>Utilizadores Registados</h2>

  <table width="100%" class="ui table">
    <thead>
      <tr>
        <th>Usuário</th>
        <th>Email</th>
        <th>Editar</th>
        <th>Apagar</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $user = new Acme\Models\UserModel;
      $users = $user->read();
      foreach ($users as $user):
      ?>
      <tr>
        <td><?php echo $user->nome;?></td>
        <td><?php echo $user->email;?></td>
        <td><a href="?p=editar&edit=true&id=<?php echo $user->idusers;?>" class="ui green button"><i class="edit icon"></i>Editar</a></td>
        <td><a href="?apagar=true&id=<?php echo $user->idusers;?>" class="ui red button"><i class="remove icon"></i>Apagar</a></td>
      </tr>
    <?php endforeach;?>
    </tbody>
  </table>
