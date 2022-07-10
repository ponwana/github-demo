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

$aom = new Teacher();
$ann = new Teacher();
$aom->set_name('Aom');
$ann->set_name("Ann");

echo $aom->get_name();
echo "<br>";
echo $ann->get_name();
?>