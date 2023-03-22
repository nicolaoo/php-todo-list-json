<?php

$string_todo= file_get_contents('./todo.json');

$list_todo= json_decode($string_todo , true);

echo $string_todo;