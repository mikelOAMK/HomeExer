<?php
/**
 *
 */
class Student extends Person
{
   function __construct($fn=null, $ln=null, $yob=null, $sc=array(), $cp=null)
  {
    $this->setFname($fn);
    $this->setLname($ln);
    $this->setAge($yob);
    $this->setYOB($yob);
    $this->selectedCourses=$sc;
    $this->creditPoints=$cp;
  }


  private $selectedCourses=array();
  private $creditPoints;

    
    public function getSelectedCourses()
    {
        return $this->selectedCourses;
    }
    public function setSelectedCourses($param)
    {
        array_push($this->selectedCourses,$param);
    }
    public function getCreditPoints()
    {
        return $this->creditPoints;
    }
    public function setCreditPoints($param)
    {
        $this->creditPoints = $param;
    }

}

?>

