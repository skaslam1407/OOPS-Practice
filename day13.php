<?php

class Account{

  private $accountNumber ;

  private function generateAccountNumber($an){
    $this->accountNumber = $an;
 
  }

  public function __call($method,$args){
     echo "Calling private method $method from outside the class is not allowed";
  }

}

 $a = new Account();
echo $a->generateAccountNumber('56666666');

?>