<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR</title>
</head>
<body>
    <h1>Basic Calculator</h1>
    <hr>
    <form action="calculator.php" method="get">
       Number 1 : <input type="number" name="num1">
        <br>
        Number 2 :<input type="number" name="num2">
        <br>
        <input type="submit">

    </form>
   Sum of two number is : <?php echo $_GET["num1"] + $_GET["num2"]?>

   
</body>
</html>