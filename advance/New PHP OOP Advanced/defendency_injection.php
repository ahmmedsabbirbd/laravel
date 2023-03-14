<?php

interface nameDetailsInterface {
    public function getName();
    public function getPhone();
}

class Person implements nameDetailsInterface{
    private $name;
    private $phone;

    function __construct($name, $phone) {  
        $this->name = $name;
        $this->phone = $phone;
    }

    public function getName() {
        return "Md/Mst ".$this->name;
    }
    
    public function getPhone() {
        return $this->phone;
    }
}

class PersonExtraDetails implements nameDetailsInterface{
    private $name;
    private $phone;
    private $address;

    function __construct($name, $phone, $address) {  
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getName() {
        return "Md/Mst ".$this->name;
    }
    
    public function getPhone() {
        return $this->phone;
    }

    public function getAddress() {
        return $this->address;
    }
}

class checkNumber {
    private $name;
    private $phone;

    function __construct(nameDetailsInterface $personDetails) {
        $this->name = $personDetails->getName();
        $this->phone = $personDetails->getPhone();
    }

    public function getNumberDetails() {
        if(preg_match('/017/', $this->phone)) {
            return "Your name is {$this->name}.\nThis number is Grameenphone operator {$this->phone}";
        } elseif((preg_match('/018/', $this->phone))){
            return "Your name is {$this->name}.\nThis number is Robi operator {$this->phone}";
        } else {
            return "Your name is {$this->name}.\nThis number is Other operator {$this->phone}";
        }
        
    }
}

// only person with name and phone
$sabbir = new Person("Sabbir Ahmmed", "01712923446");
$personDetails = new checkNumber($sabbir);

echo $personDetails->getNumberDetails();

// line break
echo PHP_EOL;
// only person with name and phone and address
$korim = new PersonExtraDetails("Korim Ahmmed", "01825648786", "Kumilla");
$personDetails = new checkNumber($korim);

echo $personDetails->getNumberDetails();