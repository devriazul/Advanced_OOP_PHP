<?php

class teacher{
        public $name;
        public $salary;

        function __construct($n,$s){
            $this->name = $n;
            $this->salary = $s;
        }
        function info(){
            echo "Teacher".'<br>';
            echo $this->name . " = " .$this->salary."<br>";
        }
}
        class headmaster extends teacher{
            public $extra = 10000 + $this->salary;

            function info(){
                echo "Headmaster".'<br>';
                echo $this->name . " = " . $extra ."<br>";
            }
}
    $t = new teacher("Riaz",20000);
    $h = new headmaster("Nahian",20000);

    $t ->info();
    $h -> info();

?>