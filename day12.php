<?php

  // __get() and __set() magic methods

    class Person {
        private $name = "John";

        public function __get($property) {
           echo "Getting '$property'\n";
        }



        public function __set($property, $value) {
           echo "Setting '$property' to '$value'\n";
        }

         

    }

    $p = new Person();
    echo $p->name; // Triggers __get()
    $p->name = "Doe"; // Triggers __set()


?>