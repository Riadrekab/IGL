var app = new Vue({
  el: '#app',
  data: {
    ligne:[],

    selected: false,
  },
  methods: {
    "sortTable": function sortTable(col) {
      this.ligne.sort(function(a, b) {
        if (a[col] > b[col]) {
          return 1;
        } else if (a[col] < b[col]) {
          return  -1;
        }
        return 0;
      })
    },
    all(){
      if(this.ligne.Jusfifie == 1){
        this.selected = true; 
     }else{ 
        this.selected = false; 
     } 
    }
  },
  computed: {
    "colonnes": function colonnes() {
      if (this.ligne.length == 0) {
        return [];
      }
      return Object.keys(this.ligne[0])
    }
  },
  mounted () {
    axios
      .get('http://localhost/IGL/TP_IGL/public/index.php/api/consulter_absences')
      .then(response => {this.ligne = response.data.data})
  }
});

