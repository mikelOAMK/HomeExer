<?php
/**
 *
 */
abstract class Person
{
private $firstName;
private $lastName;
private $yearOfBirth;
public $age;
public $from;


public function setFname($value){
  $this->firstName=$value;
}
public function setLname($value){
  $this->lastName=$value;
}
public function setYOB($value){
  $this->yearOfBirth=$value;
}
public function setFrom(){
  $this->from = new DateTime('today');
}
public function getFname(){
  return $this->firstName;
}
public function getLname(){
  return $this->lastName;
}
public function getYOB(){
  return $this->yearOfBirth;
}
public function setAge($value){
  $b = 25;
  $from = new DateTime($value);
  $to   = new DateTime('today');
  $tot =  $from->diff($to)->y;
  $this->age= $tot;
}
public function getAge(){
     return $this->age;
}
public function getFrom(){
     return $this->from;
}

  

}

?>