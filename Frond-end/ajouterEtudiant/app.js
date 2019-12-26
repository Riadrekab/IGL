const app = new Vue({
    el: '#app',
    data:{
        matricule:'',
        nom:'',
        prenom:'',
        NomUtil:'',
        Mdp:''
    },
    methods :{
        slash(){
            if(this.matricule.length==2 && this.matricule.indexOf('/')==-1)
            {
                this.matricule+='/';
            }
        },
        ab3eth(){
            axios.post('http://localhost/IGL/TP_IGL/public/index.php/api/ajouter_etudiant',{matricule:this.matricule,nom:this.nom,prenom:this.prenom,NomUtil:this.NomUtil,Mdp:this.Mdp});
        }
    }
});