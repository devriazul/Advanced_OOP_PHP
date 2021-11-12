<?php

class teacher{
        public $name;

        function __construct($n){
            $this->name = $n;
        }
        function info(){
            echo "Teacher ";
            echo "Name: " . $this->name ."<br>";
        }
}
//         class headmaster extends teacher{
//             public $extra = 10000;

//             function info(){
//                 $this ->extra += $this->salary;
//                 echo "Headmaster".'<br>';
//                 echo $this->name . " = " . $this ->extra ."<br>";
//             }
// }
    $t = new teacher("Riaz",20000);
    $t ->name = "Abdullah noman";
    $t ->info();


?>