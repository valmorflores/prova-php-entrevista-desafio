 <table border='1'>
   <tr>
      <th>ID</th>    
      <th>Nome</th>    
      <th>Email</th>
      <th>Ação</th>    
   </tr>
<?php 
foreach($data['users'] as $user) {
?>
   <tr>
      <td><?php echo $user->id;?></td>
      <td><?php echo $user->name;?></td>
      <td><?php echo $user->email;?></td>
      <td>
         <a href='user/edit/<?php echo $user->id;?>'>Editar</a>
         <a href='user/delete/<?php echo $user->id;?>'>Excluir</a>
      </td>
   </tr>
<?php } ?>
