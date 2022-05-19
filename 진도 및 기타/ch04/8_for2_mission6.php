!
<?php
    $val = rand(3, 10);
    $num = 1;
    echo "value 값은 $val<br>";
    echo "<br>";

    echo "<table border=\"1\">";
    for($i=1; $i <= $val; $i++)
    {       echo "<tr>";
        for($k=1; $k <= $val; $k++)    
            {
                echo "<td>" . $num++ . "</td>";
            }
            echo "</tr>";
    }
    echo "</table>";
    
?>