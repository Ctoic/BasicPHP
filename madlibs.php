<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>libsmad</title>
</head>
<body>
    <form action="madlibs.php" method="get">
        Color : <input type="text" name="color"><br>
        Plural Noun : <input type="text" name="pnoun"><br>
        Celebrity Name : <input type="text" name="celeb"><br>
        <input type="submit">

    </form>

    <?php 

    $color=$_GET["color"];
    $pnoun=$_GET["pnoun"];
    $celeb=$_GET["celeb"];

    echo "The roses are $color<br>";
    echo "$pnoun are blue<br>";
    echo "I love $celeb";
    ?>

</body>
</html>