<?php

function hello() {
    var_dump('hello');
}

hello();

function helloName($name='Nameless') {
    var_dump("Hello $name!");
}

helloName('Kaspar');
helloName('Martin');
helloName();

function sum($a, $b) {
    return $a+$b;
    var_dump('asdasd');
}

$answer = sum(2, 4);
var_dump($answer);

function values(...$values) {
        var_dump(...$values);
}

values(1, 2, 3, 4, 5, 6);

function name(string $name):string {
    return ucwords($name);
}

//name(['asd']);

function recursive($i) {
    var_dump($i);
    if($i < 10){
        recursive($i+1);
    }
}

recursive(0);