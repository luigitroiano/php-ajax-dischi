let app = new Vue ({
  el: "#root",
  data: {
    albums: [],
    search: "",
  },
  created() {
    axios
    .get("db.php")
    .then(response => {
      this.albums = response.data;
    })
    .catch(function (error) {
      console.log(error);
    });
  },
  computed: {
    filteredgenre: function () {
      return this.albums.filter((genere) =>{
        if (this.search == "All") {
          return this.albums
        }
        return genere.genre.match(this.search);
      });
    }
  }
});  