
   <div class="container">
      <a href="/user/add">
         <button class="mdc-button mdc-button--raised" style="margin-top: 20px; float: left;">
         ADICIONAR
         </button>
      </a>      
   </div>


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
      <td class="mdl-data-table__cell--non-numeric"><?php echo $user->name;?></td>
      <td class="mdl-data-table__cell--non-numeric"><?php echo $user->email;?></td>    
      <td class="mdl-data-table__cell--non-numeric"><a href='/user/edit/<?php echo $user->id;?>'>
      <button class="mdc-button">Editar</button></a>
      <a href='/user/del/<?php echo $user->id;?>'>
      <button class="mdc-button">Excluir</button></a>
      </td>
   </tr>
<?php } ?>
</tbody>
</table>

 
