const { createApp } = Vue ; 

createApp({
  data() {
    return {
        titol: 'Todo List',
        apiUrl: './server.php',
        todoList: [],
        newTodoText: ''
    }
  },
  methods:{
    getTodo(){
        axios.get(this.apiUrl).then((response)=>{
            // console.log(response);
            this.todoList = response.data;
        });
    },
    addTodo(){
        const data = {
            //nome : valore della chiave
            newTodoText: this.newTodoText,
        }
        //headers per ingannare il server e farli credere che è un form
        axios.post(
            this.apiUrl, 
            data,
            {headrs: {'Content-Type': 'multipart/form-data'}}
            ).then((response)=>{
                console.log(response.data);

                this.getTodo();

                this.newTodoText = '';

            });
    }
  },
  mounted(){
    this.getTodo();
  }
}).mount('#app')