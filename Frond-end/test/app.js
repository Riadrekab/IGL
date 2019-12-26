const app = new Vue({
el: '#app',
data: {
message:'',
mdp:''
},
methods:{
    submit (){
       axios.post('http://localhost/IGL/TP_IGL/public/index.php/login',{var:'test',mdp:this.mdp, nomuser:this.message});
        
    }
}
});