<?php

class Person {

 public  $name = "Raja";

 public function __construct($n){
    $this->name = $n;
 }

 public function display($n){
  
        echo "My name is ".$this->name=$n;
 }

 public function __destruct(){
    echo "<br>Object is destroyed";

}

}

$p = new Person('Amit');
echo $p->name;
echo "<br>";
$p->display('SRK');
echo "<br>";
echo $p->name; 


?>