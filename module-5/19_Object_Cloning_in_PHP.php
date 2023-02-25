<?php
// 19_Object_Cloning_in_PHP

class Color{
    public $color;
    function __construct($color){
        $this->color = $color;
    }

    function setColor($color){
        $this->color = $color;
    }
}
class FavColor {
    public $data;
    public $color;
    function __construct($data,$color) {
        $this->data = $data;
        $this->color = new Color($color);
    }

    function updateColor($color){
        $this->color->setColor($color);
    }
    function __clone(){
        $this->color = clone $this->color;
    }
}

$fc1 = new FavColor('Some Data','red');
print_r($fc1);

$fc2 = clone $fc1;

$fc2->updateColor('green');
// print_r($fc1);
print_r($fc2);


// class Human{
//     public $name;
//     public $id;
//     public $position;
//     public $age; 
//     public $salary;

//     public function __construct($name, $id, $position, $age, $salary){
//         $this->name = $name;
//         $this->id = $id;
//         $this->position = $position;
//         $this->age = $age;
//         $this->salary = $salary;
//     }
//     public function introduce(){
//         echo "I am  ". $this->name. "I have an ".$this->id. "I am an ".$this->position."in ICT division", "I am ".$this->age."years old", "I have gotten handsome salary is ".$this->salary;
//     }
//     public function get_name() {
//         return $this->name;
//     }

//     public function get_id() {
//         return $this->id;
//     }

//     public function get_position() {
//         return $this->position;
//     }

//  public function get_age() {
//         return $this->age;
//     }
//     public function get_salary() {
//         return $this->salary;
//     }

//     public function set_name( $name ) {
//         $this->name = $name;
        
//     }

//     public function set_id( $id ) {
//         $this->id = $id;
//     }

//     public function set_position( $position ) {
//         $this->position = $position;
//     }
//     public function set_age( $age ) {
//         $this->age = $age;
//     }
//     public function set_salary() {
//         return $this->salary;
//     }

// }

// $h1= new Human("sumon",122, "Accounts", 35, 50000);
// $h2= new Human("suman",123, "Accounts", 35, 52000);
 

// // echo $h2->get_salary();
// // echo PHP_EOL;   
// // $h2->set_salary(1000);
// // echo $h2->get_salary();

// echo $h1->set_salary();