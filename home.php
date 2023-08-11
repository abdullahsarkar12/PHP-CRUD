<?php
    $data = array("a","b","c");
    echo $data[0];
    echo "<br>";
    echo "hello world";
    echo "<br>";
    $cars=array("Volvo","BMW","Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    echo "<br>";
    $age = array("Peter"=>"34", "Sohan Nunu"=>"39", "Maidul Pokki"=>"41");
    echo "Peter is " . $age['Peter'] . " years old";
    echo "<br>";
    // indexed array
    $cars = array("Atiq","Raju","Hura");
    $arrayLength = count($cars);
    for($i=0;$i<$arrayLength;$i++){
        echo $cars[$i];
        echo "<br>";
    }
    // associative array
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
    foreach($age as $x=>$x_value){
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }
    // A two-dimensional array
    $cars=array(
    array("Volvo",100,96),
    array("BMW",60,59),
    array("Toyota",110,100));

    echo $cars[0][0].": Ordered: ".$cars[0][1].". Sold: ".$cars[0][2]."<br>";
    echo $cars[1][0].": Ordered: ".$cars[1][1].". Sold: ".$cars[1][2]."<br>";
    echo $cars[2][0].": Ordered: ".$cars[2][1].". Sold: ".$cars[2][2]."<br>";
?>