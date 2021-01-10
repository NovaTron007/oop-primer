<?php
/* static methods: no need to instantiate obj to use classes methods */

class User{
   public $name;
   public $age;
   public static $minPassLength = 6; // static does not change unlike other class vars

  public static function validatePass($pass){
    if(strlen($pass) >= self::$minPassLength){ // self:: used to access static variable
      return true;
    } else{
      return false;
    }
  }

}

// set password 
$password = 'hello sir';

// access user static method: no need to instantiate object to use it
if(User::validatePass($password)){
  echo 'Password valid';
} else {
  echo 'Password is not valid';
}