<h2 style="color: green;"><i class="user icon"></i>Cadastrar User</h2>
<form class="ui form" action="index.html" method="post">

<div class="filed">
  <label>User</label>
  <input type="text" name="nome" value="" placeholder="Digite o seu nome">
  <input type="hidden" name="cadastrar" value="">
</div>

<div class="filed">
  <label>E-mail</label>
  <input type="text" name="email" value="" placeholder="Digite o seu email">
</div>

<div class="filed">
  <label>Senha</label>
  <input type="password" name="senha" value="">
</div>

<div style="margin-top: 10px;">
  <button class="ui blue button" type="submit" name="button"><i class="check green icon"></i>Cadastrar</button>
</div>
</form>

<div class="ui divider">
<h2 style="color: green;"><i class="users icon"></i>Lista de Users Cadastrados</h2>

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
        <td><button class="ui green button"><i class="edit icon"></i>Editar</button></td>
        <td><button class="ui red button"><i class="remove icon"></i>Apagar</button></td>
      </tr>
    <?php endforeach;?>
    </tbody>
  </table>

</div>
