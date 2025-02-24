<?php

class Food{
  private $name;
  private $price;

  public  function  __construct(string $name,  int $price,){
    $this->name = $name;
    $this->price  = $price;
  }

  public  function  show_price()  {
    echo  $this->price ;
  }
}

class Animal  {
  private $name;
  private $height;
  private $weight;

  public  function   __construct(string $name,  int $height, int $weight){
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }
  public  function  show_height() {
    echo  $this->height;
  }
}

$coffee = new Food('コーヒー', 500);

$dog  = new Animal('犬',  50, 5000);
print_r($coffee);
echo  '<br>';
print_r($dog);
echo  '<br>';
$coffee->show_price();
echo  '<br>';
$dog->show_height();