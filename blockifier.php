<?php

namespace Blockifier;

class Blockifier {

  protected $string;

  public function __construct($string) {
    $this->string = $string;
  }

  public function blockify() {
    $hex = '127344';

    for ($char = 'A'; $char <= 'Z'; $char++) {
      $this->string = str_replace($char, '&#' . $hex . ';', $this->string);
      $hex++;
    }

    return $this->string;
  }

}

$b = new Blockifier('BLOCKIFIED TEXT');
echo $b->blockify();
