const { createApp } = Vue ; 

createApp({
  data() {
    return {
        titol: 'Todo List',
        todoList: [],
        task:{
            text: '',
            done: false
        }
    }
  },
  methods:{
   
  }
}).mount('#app')