<?php
// 23_Discussion_of_property_overloading_and_the_isset_()_and_unset_()_magic methods

class Data { 
    private $data;

    function __construct($name, $age) {
        $this->data = array();
        $this->data['name'] = $name;
        $this->data['age'] = $age;
    }

    function __get($prop){
        return $this->data[$prop];
    }

    function __set($pros, $value) {
        $this->data[$pros] = $value;
    }

    function __isset($name) {
        if(!isset($this->data[$name])) {
            echo "not found property";
            return false;
        } else {
            echo "found";
        }
    }

    function __unset($name) {
        print_r($this->data);
        unset($this->data[$name]);
        print_r($this->data);
    }

    // undifined method
    function __call($name, $argument) {
        echo $name;
        print_r($argument);
    }

    static function __callStatic($name, $arguments) {
        echo "Static Call";
    }
}

Data::red().PHP_EOL;

$data = new Data('Sabbir', 20);
echo $data->x('sadf', 23, 12 );

echo PHP_EOL;