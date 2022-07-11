<?php
class Teacher4 {
    var $name;
    public $room;
    protected $tel;
    private $idCard;
        
    function __construct(){
        $this->name = "Ponwana Rattachuchok";
        $this->room = "223";
        $this->tel = "053885458";
        $this->idCard = "1234567891011";
    }
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;               
    }
}


$t1 = new Teacher4();
echo "Teacher : " . $t1->get_name();
echo "Room: " .$t1->room . "<br>";
echo "Tel: ".$t1->tel. "<br>";
echo "ID Card : " .$t1->idCard;   //เรียกใช้งานคุณลักษณะ หรือตัวแปร

?>
