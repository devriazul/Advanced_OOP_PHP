<?php

use employee as GlobalEmployee;

class employee{
        public $name = "no name";
        public $salary = 0;

        function info(){
            echo $this->name . " = " .$this->salary."<br>";
        }
    }
    $person = new employee();
    $person ->salary =30000;
    $person ->name = "Riazul Islam";

    $person -> info();
?>