<table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
   <thead>
      <tr>
         <th>Id</th>
         <th class="mdl-data-table__cell--non-numeric">Nome</th>
         <th class="mdl-data-table__cell--non-numeric">e-mail</th>
         <th class="mdl-data-table__cell--non-numeric">Opções</th>
      </tr>
   </thead>
<tbody>
<?php 
foreach($data['users'] as $user) {
?>
   <tr>
      <td><?php echo $user->id;?></td>
      <td><?php echo $user->name;?></td>
      <td><?php echo $user->email;?></td>    
      <td><a href='/user/edit/<?php echo $user->id;?>'>Editar</a>
      <a href='/user/delete/<?php echo $user->id;?>'>Excluir</a></td>
   </tr>
<?php } ?>
</tbody>
</table>

