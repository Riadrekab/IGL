
const app = new Vue(
{
el: '#app',
data: {
message:'',
mdp:'',
Logged:false,
matricule:'',
type:''


},
methods:{

	mat_send () {
		this.matricule=this.matirucle.replace('10','11');
	},
    submit (){
       axios.post('http://localhost/IGL/TP_IGL/public/index.php/api/login',{var:'test',mdp:this.mdp, nomuser:this.message})
       .then(response =>{
       	this.type = response.data.Type;this.matricule=response.data.Matirucle;
       	if (response.data.Logged == 'yes')
       	{


       	this.Logged= true;
       }
       else
       {
       	this.Logged = false;
       }
       	if (this.Logged == true)
       	{
       		if (this.type == 'etudiant')
               {
         	window.location.href = 'http://localhost/IGL/Front-end/ConsulterAbs/consulterAbs.html?matricule=' + this.matricule;
       	       }
       	    else 
       	     if (this.type == 'admin')
       	     {
       	      window.location.href='http://localhost/IGL/Front-end/ajouteretudiant/ajoutEtudiant.html';
       	     }
       }
       } );
        
    }
}
});