<?php
  class Product {
    // public $name; パブリックだと自由にインスタンスを書き換えられてしまう
    private $id;
    private $name;
    private $price;
    private $image;
    // インスタンスの生成
    public function __construct($id,$name,$price,$image) {
      $this->id = $id;
      $this->name = $name;
      $this->price = $price;
      $this->image = $image; 
      //上記、これだけだとインスタンスから値を取得することはできない
    }
    //値を取得するメソッドを定義
    public function getId(){
      return $this->id;
    }

    public function getName(){
      return $this->name;
    }

    public function getPrice(){
      return $this->price;
    }

    public function getImage(){
      return $this->image;
    }

    private function calPriceIncludedTax(){
      $taxRate = 0.1;
      return $this->price + $this->price * $taxRate;
    }

    public function displayPrice(){
      $price = $this->calPriceIncludedTax();
      return $price."円";
    }
  }
  //$banana = new Product('banana');
?>