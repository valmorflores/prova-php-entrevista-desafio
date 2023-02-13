<?php 
foreach($data['users'] as $user) {
?>

<form action="/user/put/0">

   
<h3>Novo usuário</h3>
   <div>Nome</div>
   <label class="mdc-text-field mdc-text-field--filled" style="min-width: 400px;">
   <span class="mdc-text-field__ripple"></span>
   <input class="mdc-text-field__input" type="text" name="name" aria-labelledby="my-label-id">
   <span class="mdc-line-ripple"></span>
   </label>

   <div>E-mail</div>
   <label class="mdc-text-field mdc-text-field--filled" style="min-width: 400px;">
   <span class="mdc-text-field__ripple"></span>
   <input class="mdc-text-field__input" type="text" name="email" aria-labelledby="my-label-id">
   <span class="mdc-line-ripple"></span>
   </label>
<div>
      <button class="mdc-button mdc-button--raised" style="margin-top: 20px;">
      ADICIONAR
      </button>
   </div>
   

</form>

<?php } ?>



