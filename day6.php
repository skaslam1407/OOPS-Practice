<?php

trait DbConnection {
    public function connect() {
        // Database connection logic
        echo "Connecting to the database...\n";
    }
}


class User {
    use DbConnection;

    public function getUser($id) {
        $this->connect();
        // Logic to get user by ID
        echo "Getting user with ID: $id\n";
    }
}

class Product { 
    use DbConnection;

    public function getProduct($id) {
        $this->connect();
        // Logic to get product by ID
        echo "Getting product with ID: $id\n";
    }
}


// Example usage
$user = new User(); 

$user->getUser(1);
echo "<br>";
$product = new Product();
$product->getProduct(101);


?>