<?php
// 6_Discussing_the_scope_of_parent_and_child_classes

class ParentClass{
    protected $name;
    
    protected function setName($name) {
        $this->name = "It's protect name: {$name}";
    }

    protected function getName() {
        return $this->name;
    }
}

class ChildClass extends ParentClass{
    public $names;

    function __construct($name) {
        if('Sabbir' == $name) {
            parent::setName('Sabbir');
        } else {
            $this->names = "Please send right name";
        }
    }
    
    public function getFatherName() {
        $this->names = parent::getName();
        return $this->names;
    }
}

$fatherName = new ChildClass("Sabbir");

// print_r($fatherName);
echo $fatherName->getFatherName();