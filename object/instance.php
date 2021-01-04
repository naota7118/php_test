<?php

// クラスの頭は大文字からスタート
// {}の中に変数や定数を書いていく
// クラスは変数や定数を役割ごとにまとめたもの
// アクセス修飾子というものがあって、private, protected, pulicの3種類から選ぶ。何も書かないとpublicを選んだことになる。
// publicは外からでもアクセスできるという設定。privateはこのクラスの中からだけしかアクセスできないので、外からはアクセスできない。
// protectedは自分と継承したクラスのみ使える。
class Product{

  //変数
  // クラスの中で使える変数を設定。配列としている。
  private $product =[];

  //関数
  function __construct($product){

    // $thisはこのクラスという意味
    // このクラスの中の(->)product($productを指している)
    $this->product=$product;

  }
  public function getProduct(){
    // クラスの中のproductをecho(呼び出す)
    echo $this->product;
  }

  public function addProduct($item){
    // .=で追加するという意味
    // 引数で入ってきた$itemを追加する
    echo $product->item .= $item;
  }

  // publicの後にstaticを入れることで、静的に関数を使うことができる
  public static function getStaticProduct($str){
    echo $tstr;
  }

  
}

// new クラス名でインスタンス化できる
$instance = new Product('テスト');
var_dump($instance);

// インスタンス変数から矢印をつなぐことで関数を呼び出すことができる
// クラスの中の関数を呼び出すことができる
$instance->getProduct('');
echo '<br>';

$instance->addProduct('追加分');

$instance->getProduct('');
echo '<br>';

// 静的な関数の使い方は、クラス名前::関数名前
Product::getStaticProduct('静的');
echo '<br>';

?>