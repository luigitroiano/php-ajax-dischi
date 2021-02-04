<!-- main -->
<div class="cds-container container">
  <!-- Disco ad esempio -->
  <div class="cd" v-for="album in filteredgenre">
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