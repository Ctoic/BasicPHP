<?php 

    $name = "najam";
    $aname = "surname";

    $age = 21;
    $sleep = 8 ;
    $toal_sleep = (8  * 365) * $age ;
    echo "you wasted this :", $toal_sleep;

    print "<br>";



    $catcat = $age. $sleep;
    echo $catcat;

 // blank line in php 
    print "<br>";



    $cat = $name . $aname . $age;
    echo $cat;


    function ulta($name)
    {
        $ultanam = "";
        for ($i=0; $i < strlen($name); $i++) { 
            
            $ultanam = $name[$i] . $ultanam;
        }

    }


    $ultanam($name);
    echo $ultanam;




?>