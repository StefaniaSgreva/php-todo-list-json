<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- axios CDN  -->
    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <!-- vue 3  CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- My CSS -->
    <link rel="stylesheet" href="./CSS/style.css">
    <title>PHP Todo List</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <h1>{{titol}}</h1>
            <div class="wrapper">
                <ul id="todo-list">
                    <li v-for="(todo,index) in  todoList" class="todo" :class="todo.done ? 'done' : '' "
                        @click="toggleTodo(index)">
                        <span class="todo"><i class="fa-regular fa-square" :class="{squaredone: todo.done}"></i>{{
                            todo.text }}</span>
                        <span @click.stop="deleteTodo(index)" class="trash-can-span"><i
                                class="fa-solid fa-trash-can"></i></span>
                    </li>
                </ul>
            </div>
            <div class="add-todo">
                <input type="text" placeholder="add new task" v-model.trim="newTodoText" name="newTodoText"
                    @keyup.enter="addTodo" required>
                <button @click="addTodo" class="btn-add"><i class="fa-solid fa-plus"></i></button>
            </div>
        </div>
    </div>
    <!-- My JS -->
    <script src="js/script.js"></script>
</body>

</html>