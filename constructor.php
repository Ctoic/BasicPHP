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



    function afforadable()
    {
        if($this->fee <100000)
        {
            print"$this->name ";
            print "University is affordable for middle or lower middle class";

            return true;
        }
        else
        {
            print"$this->name ";
            print "University is not affordable for middle or lower middle class";

            return false;
        }

    }





}

// objects created and the parmeter are given so that at time the constructor is called they will get these valuses 


$uni1 = new University("Fast", "H11", 170000,"Available");
$uni2 = new University("Nust", "H11", 270000,"Available");
$uni3 = new University("Air", "H11", 370000,"Available");
$uni4 = new University("Islamic", "H11", 70000,"Available");
$uni5 = new University("Szabist", "H11", 570000,"Available");

// calling object functions 

echo $uni1->afforadable();
echo "<br>";
echo $uni2->afforadable();
echo "<br>";
echo $uni3->afforadable();
echo "<br>";
echo $uni4->afforadable();
echo "<br>";
echo $uni5->afforadable();
echo "<br>";






?>
    
</body>
</html>