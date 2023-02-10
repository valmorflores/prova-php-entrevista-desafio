<?php 
foreach($data['users'] as $user) {
?>

<div class="form-container">

   <div class="mdc-text-field" style="margin-top: 20px;">
      <label class="mdc-floating-label" for="id">Id</label>
      <input type="text" id="id" class="mdc-text-field__input" value="<?php echo $user->id;?>">
      <div class="mdc-line-ripple"></div>
   </div>

   <div class="mdc-text-field" style="margin-top: 20px;">
      <label class="mdc-floating-label" for="name">Name</label>
      <input type="text" id="name" class="mdc-text-field__input" value="<?php echo $user->name;?>">
      <div class="mdc-line-ripple"></div>
   </div>

   <div class="mdc-text-field" style="margin-top: 20px;">
      <label class="mdc-floating-label" for="email">E-mail</label>
      <input type="text" id="email" class="mdc-text-field__input" value="<?php echo $user->email;?>">
      <div class="mdc-line-ripple"></div>
   </div>
    
   <button class="mdc-button mdc-button--raised" style="margin-top: 20px;">
     ATUALIZAR
   </button>

</div>    

<?php } ?>
