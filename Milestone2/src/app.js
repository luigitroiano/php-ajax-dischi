let app = new Vue ({
  el: "#root",
  data: {
    albums: [],
  },
  mounted() {
    axios
    .get("db.php")
    .then(response => {
      this.albums = response.data;
    })
    .catch(function (error) {
      console.log(error);
    });
  },
  methods: {

  },
});