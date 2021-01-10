<?php
/* simple class */

class User{
  //properties
  public $name;

  // methods
  public function sayHello(){
    // this: access the properties or methods in a class by using this
    return $this->name . ' says hello';
  }

}

$user1 = new User();
$user1->name = 'Jenny';
echo '<br/>';
echo $user1->name;
echo '<br/>';
echo $user1->sayHello();

$user2 = new User();
$user2->name= 'Dwayne';
echo '<br/>';
echo $user2->name;
echo '<br/>';
echo $user2->sayHello();