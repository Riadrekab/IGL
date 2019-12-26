
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
    },
      "getParameterByName": function getParameterByName(name) {
    let url = window.location.href;
    name = name.toString().replace(/[\[\]]/g, '\\$&');
    let regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
  
  }
  },
  computed: {
    "colonnes": function colonnes() {
      if (this.ligne.length == 0) {
        return [];
      }
      return Object.keys(this.ligne[0]);
      }


},
  mounted () {
      //let url = new URL(window.location.href);

       let param = this.getParameterByName('matricule');
       // let param = this.$route.query
        //console.log('matricule')
        axios
      .get('http://localhost/IGL/TP_IGL/public/index.php/api/consulter_absences'+ param)
      .then(response => {this.ligne = response.data.data});
  }
});

