<?php

class MyException extends Exception{}
class MyNetworkException extends Exception{}

function testException() {
    // throw new MyException("ki re",100);
}

function testException1() {
    throw new MyNetworkException("ki re N",100);
}

try{
    testException();
    testException1();
} catch (MyException $e) {
    echo $e->getCode().": ".$e->getMessage();
} catch (MyNetworkException $e) {
    echo $e->getCode().": ".$e->getMessage();
}