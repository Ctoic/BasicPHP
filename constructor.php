<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructors</title>
</head>
<body>

<?php

class University 
{
    var $name;
    var $location;
    var $fee;
    var $hostel_facility;
    
    function __construct($aname, $alocation, $afee, $ahostel_facility)
    {

        $this->name = $aname;
        $this->location = $alocation;
        $this->fee=$afee;
        $this->hostel_facility=$ahostel_facility;



        
    }



}

// objects created and the parmeter are given so that at time the constructor is called they will get these valuses 


$uni1 = new University("Fast", "H11", 170000,"Available");
$uni1 = new University("Nust", "H11", 270000,"Available");
$uni1 = new University("Air", "H11", 370000,"Available");




?>
    
</body>
</html>