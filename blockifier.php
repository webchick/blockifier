<?php

$string = 'BLOCKIFIED TEXT';
$hex = '127344';

for ($char = 'A'; $char <= 'Z'; $char++) {
  $string = str_replace($char, '&#' . $hex . ';', $string); 
  $hex++;
}

echo $string;

