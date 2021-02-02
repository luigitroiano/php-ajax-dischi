<!-- Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, Sass, JS, VueJS, PHP
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso VueJS.
Bonus:
Attraverso un’altra chiamata ajax, filtrare gli album per artista -->
<?php
require "db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-AJAX-DISCHI</title>
  <!-- CSS -->
  <link rel="stylesheet" href="./dist/css/app.css">
  <!-- axios -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
</head>

<body>
  <div id="root">
    <header>
      <div class="container d_flex">
        <img src="./dist/img/logo.png" alt="logo" />
        <div class="select">
          <label for="genres">Choose a genre:</label>
          <select name="genres" id="genres">
            <option value="pop">Pop</option>
            <option value="rock">Rock</option>
            <option value="metal">Metal</option>
            <option value="jazz">Jazz</option>
          </select>
        </div>
      </div>
    </header>

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
  <script src="./dist/js/app.js"></script>
  <!-- VueJS -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
</body>

</html>