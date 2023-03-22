<?php

$string_todo= file_get_contents('./todo.json');

$list_todo= json_decode($string_todo , true);

$new_task = isset($_POST['todo']) ? $_POST['todo'] : null;

if($new_task !== null){
    $list_todo[] = $new_task;
}

$new_user_task= json_encode($list_todo);
file_put_contents('./todo.json',$new_user_task);

header('Content-type: application/json');

echo $new_user_task;