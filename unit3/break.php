<?php
$i = 1;
while($i <=10){
    print ("ทำงานรอบที่ $i <br>");
    if($i == 6){
        print ("เจอเงื่อนไขรอบที่ 3 ทำงานครั้งที่ 1 <br>");
        break;
        print ("เจอเงื่อนไขรอบที่ 3 ทำงานครั้งที่ 2 <br>");
    }

    $i++;
}
?>