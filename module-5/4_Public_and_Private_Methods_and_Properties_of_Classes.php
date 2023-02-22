<?php
// 4 Public and Private Methods and Properties of Classes

// class
class fund {
    private $totoalBalance;
    
    function __construct($totoalBalance = 0) {
        $this->totoalBalance = $totoalBalance;
    }

    public function addBalance($add) {
        return $this->totoalBalance += $add;
    }

    public function removeBalance($remove) {
        return $this->totoalBalance -= $remove;
    }

    public function getTotalBalance() {
        printf("My total balance %s \n", $this->totoalBalance);
    }
}

$sabbir = new fund(1000);
$sabbir->addBalance(50);
$sabbir->addBalance(50);
$sabbir->getTotalBalance();
$sabbir->removeBalance(1000);
$sabbir->getTotalBalance();