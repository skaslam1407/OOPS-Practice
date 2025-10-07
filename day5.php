<?php

interface A{
    public function test();
}

interface B{
    public function demo();
}   



class C implements A, B{
    public function test(){
        echo "This is test method from interface A";
    }
    public function demo(){
        echo "This is demo method from interface B";
    }
}

$obj = new C();
$obj->test();   

echo "<br>";
$obj->demo();












?>