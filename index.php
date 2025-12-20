<?php

$text = 'hello';
$text = $text . ' kaspar'; 
$text .= '!!!!!';
$text = ucwords($text);
var_dump($text);
var_dump($text[2]);