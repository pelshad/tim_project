<?php
    $array = array(
        "Hong" => 182.2,
        "Hwnag" => 180.4,
        "kim" => 176.3,
        "Park" => 174.1,
    );
    
    echo "<table border=1>";
    echo "<th>name</th><th>height</th>";

    foreach($array as $name => $height){
        echo "<tr><td>" . $name . "</td><td>" . $height . "</td></tr>";
    }

    echo "</table>";
?>