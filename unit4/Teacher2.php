<?php
    class Teacher2 {
        var $name;
               
        function __construct($c_name){
             $this->name = $c_name;
        }
        function set_name($name){
             $this->name = $name;
        }
        function get_name(){
            return $this->name;               
        }
    }

    $t1 = new Teacher2("Ponwana Rattachuchok");
    echo "Teacher : " . $t1->get_name();
?>
