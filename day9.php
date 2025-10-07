<?php

// Late Static Binding

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who(); // Here is the late static binding
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
} 

B::test(); // Outputs "B" because of late static binding



?>