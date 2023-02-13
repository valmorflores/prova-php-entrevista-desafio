<?php 
foreach($data['users'] as $user) {
?>

<form action="/user/post/<?php echo $user->id;?>">
<h3>Edição de usuário</h3>
   <div>Id</div>
   <label class="mdc-text-field mdc-text-field--filled" style="min-width: 400px;">
   <span class="mdc-text-field__ripple"></span>
   <input class="mdc-text-field__input" type="text" name="id" aria-labelledby="my-label-id"
         value="<?php echo $user->id;?>" readonly>
   <span class="mdc-line-ripple"></span>
   </label>

   <div>Nome</div>
   <label class="mdc-text-field mdc-text-field--filled" style="min-width: 400px;">
   <span class="mdc-text-field__ripple"></span>
   <input class="mdc-text-field__input" type="text" name="name" aria-labelledby="my-label-id"
         value="<?php echo $user->name;?>">
   <span class="mdc-line-ripple"></span>
   </label>

   <div>E-mail</div>
   <label class="mdc-text-field mdc-text-field--filled" style="min-width: 400px;">
   <span class="mdc-text-field__ripple"></span>
   <input class="mdc-text-field__input" type="text" name="email" aria-labelledby="my-label-id"
         value="<?php echo $user->email;?>">
   <span class="mdc-line-ripple"></span>
   </label>

   <div>
   <button class="mdc-button mdc-button--raised" style="margin-top: 20px;">
   ATUALIZAR
   </button>
   </div>


</form>

<?php } ?>

