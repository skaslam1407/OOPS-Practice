<?php

class A{

    private $name;
    public function __construct($name){
        $this->name = $name;
    }

    public function display(){
        return $this->name;
    }

    protected function display1(){
        return $this->name;
    }
}

class B extends A{
    public function display2(){
        return $this->display1();
    }

    public function display(){

        return'bbbbb';
    }
}   

$a = new B('Sekh');
print_r($a->display()); 

?>