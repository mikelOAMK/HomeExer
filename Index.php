<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});



echo '<h2>Student</h2>';

$student1 = new Student("Mikel", "Castro", "1987-11-18", "HTML, CSS, PHP, JavaScript, MySQL",  20);
echo 'Student is '.$student1->getFname().' '.$student1->getLname().'. He is '.$student1->getAge().'yrs old.';
$student1Courses=$student1->getSelectedCourses();
echo "<pre>He studies ";
print_r($student1Courses);
echo "</pre>";
echo 'Total credit is '.$student1->getCreditPoints().'.';

echo '<br><h2>Teacher</h2>';
$teacher1 = new Teacher("Elon", "Musk", "1979-01-01", "Space Exploration, Tesla", "Engineering");
echo 'Teacher is '.$teacher1->getFname().' '.$teacher1->getLname().'. He is '.$teacher1->getAge().'yrs old.';
$subjects = $teacher1->getTeachingSubject();
echo "<pre>He teaches ";
print_r($subjects);
echo "</pre>";
echo 'He is part of the '.$teacher1->getDepartment().' department.';

echo '<br><h2>Staff 1</h2>';
$staff1 = new Staff("Kobe", "Bryant", "1980", "Cleaner");
echo 'Staff 1 is '.$staff1->getFname().' '.$staff1->getLname().'. He is '.$staff1->getAge().'yrs old.';
echo '<br> He is a '.$staff1->getVacancy().'.';

echo '<br><h2>Staff 2</h2>';
$staff2 = new Staff("Lauri", "Markkanen", "1999", "Caretaker");
echo 'Staff 2 is '.$staff2->getFname().' '.$staff2->getLname().'. He is '.$staff2->getAge().'yrs old.';
echo '<br> He is a '.$staff2->getVacancy().'.';

?>
