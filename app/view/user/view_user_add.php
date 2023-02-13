<?php 
foreach($data['users'] as $user) {
?>

<form action="/user/put/0">

   <div class="form-container">

      <div class="mdc-text-field mdc-text-field--box" style="margin-top: 20px; min-width: 300px;">
         <input type="text" id="name" name="name" class="mdc-text-field__input" value="<?php echo $user->name;?>">
         <div class="mdc-line-ripple"></div>
      </div>

      <div class="mdc-text-field" style="margin-top: 20px; min-width: 300px;">
         <input type="text" id="email" name="email" class="mdc-text-field__input" value="<?php echo $user->email;?>">
         <div class="mdc-line-ripple"></div>
      </div>
      
      <button class="mdc-button mdc-button--raised" style="margin-top: 20px;">
      ADICIONAR
      </button>

   </div>    

</form>

<?php } ?>



