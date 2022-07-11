<?php
class Teacher6 {
    public $name;

    public function __construct($c_name){
        $this->name = $c_name;
    }
    public function intro(){
       echo "My name is {$this->name}.";
    }

}
class Special_teacher extends Teacher6 {
    public function show() {
          echo "Hello Spectiol_teacher  ";
    }
}
$t1 = new Special_teacher("Ponwana");
$t1->show();
$t1->intro();
print ("test edit");
?>
