<?php

  abstract class A{

    abstract protected function f1();
    abstract public function f2();
    abstract function f3();

}

    class B extends A{
    
        public function f1(){
        echo "f1";
        }
        public function f2(){
        echo "f2";
        }
        public function f3(){
        echo "f3";
        }
    
    }
    
    $b = new B();
    $b->f1();
    $b->f2();
    $b->f3();

?>