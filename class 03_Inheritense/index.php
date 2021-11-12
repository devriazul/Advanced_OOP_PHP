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
            public $extra = 10000;

            function info(){
                $this ->extra += $this->salary;
                echo "Headmaster".'<br>';
                echo $this->name . " = " . $this ->extra ."<br>";
            }
}
    $t = new teacher("Riaz",20000);
    $h = new headmaster("Nahian",25000);

    $t ->info();
    $h -> info();

?>