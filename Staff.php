<?php

class Staff extends Person
{
   function __construct($fn=null, $ln=null, $yob=null, $vac=null)
  {
    $this->setFname($fn);
    $this->setLname($ln);
    $this->setAge($yob);
    $this->vacancy=$vac;
  }


  private $vacancy;

    
    public function getVacancy()
    {
        return $this->vacancy;
    }
    public function setVacancy($param)
    {
        $this->vacancy=$params;
    }
}

?>

