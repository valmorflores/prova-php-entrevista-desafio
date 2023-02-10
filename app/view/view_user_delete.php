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
      <td></td>
   </tr>
<?php } ?>
</tbody>
</table>



<div id="dialog" style="display:default;">
<div class="mdc-dialog">
    <div class="mdc-dialog__surface">
      <header class="mdc-dialog__header">
        <h2 class="mdc-dialog__header__title">
          Confirm
        </h2>
      </header>
      <section class="mdc-dialog__body">
        Are you sure you want to proceed?
      </section>
      <footer class="mdc-dialog__footer">
        <button id="dialogOkBtn" class="mdc-button mdc-dialog__footer__button mdc-dialog__footer__button--accept">OK</button>
        <button id="dialogCancelBtn" class="mdc-button mdc-dialog__footer__button mdc-dialog__footer__button--reject">Cancel</button>
      </footer>
    </div>
  </div>
</div>


