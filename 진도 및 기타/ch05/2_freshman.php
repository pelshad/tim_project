<?php
    $freshman = array(
        "david" => "computer",
        "alice" => "Math",
        "elsa" => "physics",
        "bob" => "music",
        "chirs" => "electroniucs"
    );

    print_r($freshman);
    print "<br>";
    print "<br>";
    print $freshman["david"] . "<br>";
    print $freshman["alice"] . "<br>";
    print $freshman["elsa"] . "<br>";
    print $freshman["bob"] . "<br>";
    print $freshman["chirs"] . "<br>";

    $freshman["bob"] = "dance";
    print "<br><br>";
    print $freshman["bob"] . "<br>";

    $freshman["frank"] = "history";
    print $freshman["frank"] . "<br>";

?>