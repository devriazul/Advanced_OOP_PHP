<?php

class employee{
        public $name;
        public $salary;

        function __construct($n = "no name",$s = 0){
            $this->name = $n;
            $this->salary = $s;
        }

        function info(){
            echo $this->name . " = " .$this->salary."<br>";
        }
    }
    $person = new employee("Riazul Islam", 30000);
    // $person ->salary =30000;
    // $person ->name = "Riazul Islam";

    $person -> info();
?>