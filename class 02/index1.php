<?php

    class employee{
        public $name, $salary;

        function info(){
            echo $this ->name . " = " . $this->salary ."<br>";
        }
    }
   $person = new employee();
   $person -> name = "Riazul Islam";
   $person -> salary = "30000";

   $person -> info();

?>