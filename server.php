<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-Requested-With");

$file_url = './data.json'; //creo variabile per utilizzarla dove mi serve sotto

//leggo il file di testo (_text)
$file_text = file_get_contents($file_url);

//converto il testo json in un array php
$todo_list = json_decode($file_text);

if (isset($_POST['newTodoText'])) {

    // echo 'il parametro post è arrivato';

    //prendere il valore inviatoci
    //inserirlo nell'array
    //salvarlo nel file
    //ricaricare i nuovi todo

    $newTodo = [
        'text' => $_POST['newTodoText'],
        'done' => false,
    ];

    array_push($todo_list, $newTodo);
    // print_r($todo_list);
    file_put_contents($file_url, json_encode($todo_list));


} else {

    // echo 'il parametro post non è arrivato';
    header('Content-Type: application/json');
    echo json_encode($todo_list);

}