<?php
/* inheritance */

class User{
  protected $name = 'Dwayne';
  protected $age;

  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }
}

// Customer can use User class variables to set a new customer as it iherits User
// No need to declare vars for Customer
class Customer extends User{
  private $balance;

  public function __construct($name, $age, $balance){
    parent::__construct($name, $age); // inherit contructor in parent class
    $this->balance = $balance;
  }

  public function pay($amount){
    return $this->name .  ' paid $' . $amount; 
  }

  public function getBalance(){
    return $this->balance;
  }
}

// new customer obj but can use User due to inheritance
$customer1 = new Customer('John', 33, 15000);
echo $customer1->pay(100);
echo $customer1->getBalance();