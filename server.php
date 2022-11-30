<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-Requested-With");

$file_url = './data.json';

//leggo il file di testo (_text)
$file_text = file_get_contents($file_url);
//converto il testo json in un array php
$todo_list = json_decode($file_text);

if (isset($_POST['newTodoText'])) {

    // echo 'il parametro è arrivato';
    $newTodo = [
        'text' => $_POST['newTodoText'],
        'done' => false,
    ];

    array_push($todo_list, $newTodo);

    file_put_contents($file_url, jason_encode($todo_list));

} else {

    // echo 'il parametro non è arrivato';ù
    header('Content-Type: application/json');
    echo json_encode($todo_list);
}