<?php
// 13_Discussing_static_method_overrides_in_child_classes


class ParentClass {
    static function sayHellow() {
        echo "Hi";
    }
}

class ChildClass extends ParentClass {

    static function sayHellow() {
        echo "Hi Class";
        parent::sayHellow();
    }
}

$childClass = new ChildClass();

echo $childClass->sayHellow();