<?php
require "contato.class.php";
  $contato = new Contato();
?>
<h1>contatos</h1>
<a href="adicionar.php">[ADICIONAR]</a>
<br>
<br>
<table border="1" width="500">
  <tr>
    <th>ID</th>
    <th>nome</th>
    <th>email</th>
    <th>ações</th>
  </tr>
  <?php
  $lista = $contato->getAll();
  foreach($lista as $item):
    ?>
    <tr>
      <td><?php echo $item['id'] ?></td>
      <td><?php echo $item['nome'] ?></td>
      <td><?php echo $item['email'] ?></td>
      <td>
        <a href="editar.php?email=<?php echo $item['email'] ?>&<?php echo "id=".$item['id']?>">(EDITAR)</a>
        <a href="excluir.php?email=<?php echo $item['email'] ?>">(Excluir)</a>
      </td>
    </tr>
    <?php
  endforeach;
  ?>
</table>