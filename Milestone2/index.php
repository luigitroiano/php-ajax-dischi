<!-- Seconda Milestone:
Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso VueJS. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dischi</title>
  <!-- css -->
  <link rel="stylesheet" href="./dist/css/app.css">
  <!-- vue js -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <!-- axios -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
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
      <div class="cd" v-for="album in albums">
        <img :src="album.poster" alt="foto album">
        <h3>{{ album.title }}</h3>
        <span class="author">{{ album.author }}</span>
        <span class="year">{{ album.year }}</span>
      </div>
    </div>
  </div>

  <!-- js -->
  <script src="./dist/js/app.js"></script>
</body>

</html>