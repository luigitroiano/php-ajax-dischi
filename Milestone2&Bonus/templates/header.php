<body>
  <div id="root">
    <header>
      <div class="container d_flex">
        <img src="./dist/img/logo.png" alt="logo" />
        <div class="select">
          <label for="genres">Choose a genre:</label>
          <select v-model="search" name="genres" id="genres">
            <option value="All">All</option>
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
            <option value="Metal">Metal</option>
            <option value="Jazz">Jazz</option>
          </select>
        </div>
      </div>
    </header>