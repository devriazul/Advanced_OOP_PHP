<?php

    class calculation{
        public $a, $b, $c;

        function sum(){
            $this->c = $this->a+$this->b;
            return $this->c;
        }
    }

    $r15 = new calculation();

    $r15 -> a = 20;
    $r15 -> b = 10;

?>