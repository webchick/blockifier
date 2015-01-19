<?php

class Blockifier {

  public static function blockify($string) {
    $hex = '127344';

    for ($char = 'A'; $char <= 'Z'; $char++) {
      $string = str_replace($char, '&#' . $hex . ';', $string);
      $hex++;
    }

    return $string;
  }
}

echo Blockifier::blockify('BLOCKIFIED TEXT');

