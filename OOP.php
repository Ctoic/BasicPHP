<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop</title>
</head>
<body>




<?php

    // creating a blue print for student to create real students in php program
    class Student 
    {
        // member data
        var $name;
        var $Degree;
        var $rollnumber;


        // Constructor function 
        
        function __construct()
        {
            $count = 0 ;
            $count++;


            print"student is created <br>";
            echo"$count";
        
        }



    }

    // creating objects here 

    $student1 = new Student;
    $student2 = new Student;

    // providing the object name and necessary info 


    $student1->name = "najam";
    $student1->Degree = "Computer Science";
    $student1->rollnumber = "2612";

    $student2->name = "Jasim";
    $student2->Degree = "Computer Science";
    $student2->rollnumber = "1314";

    // printinf the values 
    echo "Your name is :";
    echo $student1->name; 
    echo "<br>";
    echo "Currently Persuing : ";
    echo $student1->Degree; 
    echo "<br>";
    echo "roll number is : ";
    echo $student1->rollnumber; 

    // printing student 2 information 
    echo "<hr>";
    echo "Your name is :";
    echo $student2->name; 
    echo "<br>";
    echo "Currently Persuing : ";
    echo $student2->Degree; 
    echo "<br>";
    echo "roll number is : ";
    echo $student2->rollnumber; 

    
    ?>
    
</body>
</html>