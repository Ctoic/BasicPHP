<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="get">
        Name: <input type="text" name="name">
        <input type="submit">

        Age : <input type="number" name="age">
        <input type="submit">
    </form>

    Your name is : <?php 
    // now we can access the information in form here in php program
    echo $_GET["name"];
    ?>
    <br>
    Your Age is : <?php echo $_GET["age"];?>
</body>
</html>
