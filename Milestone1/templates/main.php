<div class="cds-container container">
  <!-- Disco ad esempio -->

  <?php
  foreach ($db_dischi as $key => $values) { ?>
    <div class="cd">
      <img src="<?php echo $values["poster"]; ?>" alt="copertina album">
      <h3><?php echo $values["title"]; ?></h3>
      <span class="author"><?php echo $values["author"]; ?></span>
      <span class="year"><?php echo $values["year"]; ?></span>
    </div>
  <?php
  }
  ?>

</div>
</div>



<!-- js -->
<!-- <script src="./dist/js/app.js"></script> -->
<!-- VueJS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> -->
</body>

</html>