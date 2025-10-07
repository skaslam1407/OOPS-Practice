<?php
 class A{

    public static $name = "hello";
    public  $age = 30;

    public static function test(){
      return  self::$name;
    }

    public function display(){
       self::test();
    }

}

class B extends A{

    public static function test(){
        //return parent::test();
        return self::$name;
    }
}   
//A::test();
//echo A::$name;
$a = new B();
print_r($a->test()); 
 

?>