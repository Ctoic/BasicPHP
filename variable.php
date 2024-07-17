<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables</title>
</head>
<body>
    <?php 
        //  data type 
        $age = 21;
        $name = "naJam";
        $ismale = "yes";
        $gpa = 2.67;

        $Academy = "Stoic School";


        echo $age;
        echo "<br>";
        echo $name;
        echo "<br>";

        echo $ismale;
        echo "<br>";

        echo $gpa;
        echo "<br>";

        echo strtoupper($name);
        echo "<br>";

        echo strtolower($name);
        echo "<br>";

        
        // STRING SLICING IN PHP 
        ECHO $name[3];

        echo "<br>";
        echo str_replace("School" ,"Alma", $Academy);
        echo "<br>";

        echo substr($Academy, 6 , 4);
        echo "<br>";


        // replacing a string part 




        // IF CONDITIONS IN PHP 

        if ($name == "naJam") {
            echo "Enter the room";
        }
        else
        {
            echo "not allowed";
        }

       




        ?>
    
</body>
</html>