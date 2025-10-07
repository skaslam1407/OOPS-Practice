<?php

namespace myproject1 ;
class A{
    public function display() {
        echo "Class A display method called\n";
    }
}

namespace myproject2 ;
class A{
    public function display() {
        echo "Class B display method called\n";
    }
}

use myproject1\A as AA;
use myproject2\A as BB;

$a = new AA();
$a->display();
echo "<br>";
$b = new BB();
$b->display()





?>