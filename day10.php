<?php


trait Logger {
    public function log($message) {
        echo "[LOG] " . $message . "\n";
    }
}

trait Validator {
    public function validate($data) {
        echo "Validating: " . $data . "\n";
    }
}

class User {
    use Logger,Validator; // Include trait
}

class Product {
    use Logger; // Include trait
}

$user = new User();
$user->log("User created."); // Output: [LOG] User created.
$user->validate("user data");
$product = new Product();
$product->log("Product added."); // Output: [LOG] Product added.













?>
