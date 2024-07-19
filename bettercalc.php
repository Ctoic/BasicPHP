<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>clcu</title>
</head>
<body>
 

<h2>Calculator using php beginner guide</h2>
<form action="bettercalc.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1"> First Number </label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter number 1" name="num1">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1"> Select Operator </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter number 1" name="op">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1"> Second Number </label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter number 2" name="num2">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <input type="submit" class="form-control">
</form>

<?php 

    $num1= $_POST["num1"];
    $num2 = $_POST["num2"];
    $op= $_POST["op"];

    if($op == "+")
    {
        ECHO $num1+$num2;
    }
    elseif($op =="-")
    {
        echo $num1 - $num2;
    }

    elseif($op == "*")
    {
        echo$num1 * $num2;
    }
    elseif($op == "/")
    {
        echo$num1 /$num2;
    }

    elseif($op == "%")
    {
        echo$num1 % $num2;
    }
    elseif($op == "^")
    {
        echo pow($num1, $num2);
    }


    else 
    {
        echo "it is invalid operator";
    }


    ?>
    
</body>
</html>