<?php
    class Teacher3 {
        var $name;
               
        function __construct($c_name){
             $this->name = $c_name;
        }
        function __destruct(){
            echo "My name is {$this->name}.";
        }
    }

    $t1 = new Teacher3("Ponwana Rattachuchok");
?>
