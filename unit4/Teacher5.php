<?php
class Teacher5 {
    var $name;
    public $room;
    protected $tel;
    private $idCard;
    
    function __construct(){
         $this->name = "Ponwana Rattachuchok";
         $this->tel = "053885458";
         $this->idCard = "1234567891011";
    }
    function set_name($name){
          $this->name = $name;
    }
    function get_name(){
          return $this->name;               
    }
    private function get_idCard(){ //เพิ่มเมท็อด
          return $this->idCard;
    }

}


$t1 = new Teacher5("Ponwana Rattachuchok");
echo "Teacher : " . $t1->get_name();
echo "ID Card : " .$t1->get_idCard(); //เรียกใช้งานเมท็อด


?>
