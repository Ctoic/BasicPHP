<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <h1>Intro Associative Arrays</h1>
    <hr>
    <ul>
        <li>
            it is same as dictionary in python
        </li>
        <li>
            key and value pair
        </li>
    </ul>
    <form action="associativearray.php" method="post"><br>
        <input type="text" name="place" id=""><br>
        <input type="submit">

    </form>


<?php 
    $place= array("najam"=>"Gilgit", "Jasim"=>"karachi","hammad"=>"Kashmir");
    echo $place[$_POST["place"]];

?>
    
</body>
</html>