<?php
$color = array("red","green","blue","yellow","pink","black");
foreach($color as $value)
{
    print ("$value <br>");
}

$n = array(1,52,14,8,6,7,85,100);
$sum = 0;
foreach($n as $value)
{
    $sum = $sum + $value;
    print ("$value <br>");
}
print ("Sum = $sum ");
?>