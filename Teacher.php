<?php

class Teacher extends Person
{
   function __construct($fn=null, $ln=null, $yob=null, $ts=array(), $dep=null)
  {
    $this->setFname($fn);
    $this->setLname($ln);
    $this->setAge($yob);
    $this->teachingSubject=$ts;
    $this->department=$dep;
  }


  private $teachingSubject=array();
  private $department;

    
    public function getTeachingSubject()
    {
        return $this->teachingSubject;
    }
    public function setTeachingSubject($param)
    {
        array_push($this->teachingSubject,$param);
    }
    public function getDepartment()
    {
        return $this->department;
    }
    public function setDepartment($param)
    {
        $this->department = $param;
    }

}

?>

