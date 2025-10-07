<?php

class base{

    protected static $name = 'Sekh';
    
    public static function getName(){
        return static::$name; // Late Static Binding instead of self::$name
    }

}

class child extends base{
      protected static $name = 'Aslam';

}

$d = new child();
echo $d->getName();  // Outputs: Sekh


?>