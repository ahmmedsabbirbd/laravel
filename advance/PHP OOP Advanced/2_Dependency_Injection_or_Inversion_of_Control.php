<?php

interface BaseStudent{
    function displayName();
}

class Student implements BaseStudent{
    private $name;

    function __construct($name){
        $this->name =  $name;
    }

    function displayName() {
        echo $this->name;
    }
}

// class StudentManager{
//     function introduceStudent($name) {
//         $st = new Student($name);
//         $st->displayName();
//     }
// }


class StudentManager{
    function introduceStudent(BaseStudent $student) {
        $student->displayName();
    }
}

// $sabbir = new StudentManager();
// $sabbir->introduceStudent("Sabbir");

$date = new DateTime(); 

$sabbir = new Student("Sabbir");
$sabbirMangager = new StudentManager();
$sabbirMangager->introduceStudent($sabbir);
// $sabbirMangager->introduceStudent($date);