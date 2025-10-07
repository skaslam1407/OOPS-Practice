<?php

class A{

    public function display(){
        echo "Hello World";
    }
}


class B extends A{

    public function display(){
        parent::display();
        echo " from PHP";
    }
}

$obj = new B();
$obj->display();

?>