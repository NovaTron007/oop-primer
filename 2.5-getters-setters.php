<?php
/* getters & setters */

class User{
  // private variables: getters can get private
  private $name;
  private $age;

  // constructor
  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }
  
  // setters & getters can access private values
  public function getName(){
    return $this->name;
  }

  public function setName($name){
    return $this->name = $name;
  }

  // MAGIC METHODS: handy to set any property by passing in it's name

  // __get MAGIC METHOD: check if a property exists within obj
  public function __get($property){
    if(property_exists($this, $property)){
      return $this->$property;
    }
  }
  // __set MAGIC METHOD, accepts property to update, new value
  public function __set($property, $value){
    if(property_exists($this, $property)){
      return $this->$property =$value;
    }
  }
}

// updating user name with setter
// $user1 = new User('Jason', 39);
// echo $user1->getName();
// $user1->setName('Jessica');
// echo $user1->getName();
// using magic getter
// echo $user1->__get('age');

// using magic getters and setters
$user1 = new User('Dwayne', 35);
echo $user1->__get('name');
$user1->__set('name', 'Joe');
echo $user1->__get('name');


