<?php 
    
    //take marks input from user 
    readline("Enter your marks : ");
    $marks  = $$_GET["marks"];
    if($marks >= 80 && $marks <= 100)
    {
        echo "A+";
    }
    else if($marks >= 70 && $marks <= 79)
    {
        echo "A";
    }
    else if($marks >= 60 && $marks <= 69)
    {
        echo "B";
    }
    else if($marks >= 50 && $marks <= 59)
    {
        echo "C";
    }
    else if($marks >= 40 && $marks <= 49)
    {
        echo "D";
    }
    else if($marks >= 33 && $marks <= 39)
    {
        echo "E";
    }
    else if($marks >= 0 && $marks <= 32)
    {
        echo "F";
    }
    ?>