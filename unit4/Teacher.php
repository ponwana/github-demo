<?PHP
class Teacher {
    // Propertes
    var $name;

    // Methods
    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;               
    }
}

$t1 = new Teacher();
$t2 = new Teacher();
$t1->set_name('Aom');
$t2->set_name("Ann");

echo $t1->get_name();
echo "<br>";
echo $t2->get_name();
?>