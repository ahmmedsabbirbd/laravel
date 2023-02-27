<?php
namespace ProductManagement\Members;

class Members {
    private $members;

    function __construct() {
        $this->members = [];
    }

    function setName($name) {
        $this->members[] = $name;
    }
    
    function getName() {
        return $this->members;
    }
}