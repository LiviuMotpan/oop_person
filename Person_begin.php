<?php


class Person {
  private $name;
  private $lastName;

  public function __construct(string $name,string $lastName) {
    $this->name = $name;
    $this->lastName = $lastName;
  }
  public function getName() {
    return $this->fullName = $this->name. ' ' . $this->lastName;
  }
  public function greeting(string $person,$known=true) {
    if($known){
      echo sprintf("[%s] - hi, %s\n",$this->name,$person);
    }else {
      echo sprintf("[%s] - hi, %s , nice to meet you\n",$this->name,$person);
    }
  }
  public function __toString() {
    echo "<h1>Dialog</h1>  \n";
  }
}

$liviu = new Person('Liviu','Motpan');
$alex = new Person('Alex','Johnson');
$ana = new Person('Ana','Doe');
$liviu->__toString();
$liviu->greeting("Ana",false);
$ana->greeting("Liviu",false);
$alex->greeting("Liviu");
$liviu->greeting("Alex");
$alex->greeting("Ana",false);
$ana->greeting("Alex",false);


?>