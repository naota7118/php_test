<?php

namespace App\Models;

// クラスの名前をファイルと同じ名前にする必要がある
class TestModel
{
  private $text = 'hello world';

  public function getHello(){
    return $this->text;
  }
}
?>