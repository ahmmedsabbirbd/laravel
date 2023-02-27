<?php
namespace Assainment\Person;

class Person {
    private $name;
    private $email;

    function setName($name) {
        $this->name = $name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getName() {
        return $this->name;
    }

    function getEmail() {
        return $this->email;
    }
}