<?php

    class calculation{
        public $a, $b, $c;

        function sum(){
            $this->c = $this->a+$this->b;
            return $this->c;
        }
        function sub(){
            $this->c = $this->a - $this->b;
            return $this->c;
        }
    }

    $r15 = new calculation();

    $r15 -> a = 20;
    $r15 -> b = 10;

    echo "Sum for R15: ". $r15 ->sum();
    echo "<br>";

    $pulsar = new calculation();
    $pulsar -> a =50;
    $pulsar -> b =40;

    echo "Sub for Pulsar: ". $pulsar ->sub();
   

?>