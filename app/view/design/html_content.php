<?php echo $start; ?>
<?php echo $header; ?>
<body>
    <main class="mdl-layout__content">
      <div class="page-content">
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col">
            <?php echo $content; ?>
          </div>
        </div>
      </div>
    </main>
    <?php echo $footer; ?>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>
<?php echo $end;?>