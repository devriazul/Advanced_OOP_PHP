<?php

class teacher{
        public $name;
        public $salary;

        // function __construct($n = "no name",$s = 0){
        //     $this->name = $n;
        //     $this->salary = $s;
        // }
        function __construct(){
            echo "Teacher info";
        }

        function info(){
            echo $this->name . " = " .$this->salary."<br>";
        }
}
        class headmaster extends teacher{
            function __construct(){
            echo "Headmaster info";
    }

}



    $person = new teacher();
    // $person ->salary =30000;
    // $person ->name = "Riazul Islam";

    // $person -> info();

?>