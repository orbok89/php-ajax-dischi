
var app = new Vue({
    el: '#root',
    data: {
     db: '',
     genere:'',
     dischi_filtrati: this.db
    },
    methods:{
        filtro(){
            this.dischi_filtrati= [];
            for (let i=0; i< this.db.length; i++){
                if (this.db[i].genre==this.genere){
                    this.dischi_filtrati.push(this.db[i])
                }
            }
            console.log(this.dischi_filtrati)
        }
    },
    created(){
        axios.get('http://localhost:8888/PHP/php-ajax-dischi/api/server.php')
        .then((response)=>{
            this.db=response.data;

        })
    }
  })