<?php


$json = '{"a":1,"b-a":28877,"c":3,"d":4,"e":5}';
var_dump(json_decode($json));
var_dump(json_decode($json, true));


$obj = json_decode($json);
var_dump($obj->b);
var_dump($obj->{'b-a'});

//Доступ к элементам объекта, которые содержат символы, недопустимые в соответствии с соглашением об именах PHP
// (то есть дефис), может быть выполнен путем обрамления имени элемента фигурными скобками и апострофами.
$json = '{"foo-bar": 12345}';

$obj = json_decode($json);
print $obj->{'foo-bar'}; // 12345


