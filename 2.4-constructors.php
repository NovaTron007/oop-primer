<?php
/* contructors & destructors */

class User{
  public $name;
  public $age;

  public function __construct($name, $age){ // magic method
    // instantiate: run when obj is created
    echo '<p>constructor ran</p>';
    echo 'Current Class: ' . __CLASS__; // magic constants

    $this->name = $name;
    $this->age = $age;
  }

  // cleanup: run when closed connections or no other references to certain object
  public function __destruct(){ // magic method
     echo '<br>destructure ran';
  }

  public function sayHello(){
    return $this->name . ' says hello';
  } 

}
// objects set params here
$user1 = new User('Dwayne',34);
$user2 = new User('Jennifer', 33);

// access user obj funcs
echo $user1->name . ' is ' . $user1->age . '<br>';
echo $user2->name . ' is ' . $user2->age . '<br>';
echo $user1->sayHello();