<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
</head>
<body>
    <h1>Creating Checkboxes</h1>
    <hr>
    <h2>Extracting Information from Checkboxes</h2>
    <ul>
        <li>...</li>
        <li>...</li>
        <li>...</li>
    </ul>
    <hr>
    <form action="checkboxes.php" method="post">
        Apples <input type="checkbox" name="fruit[]" value="Apples"><br>
        Apricot <input type="checkbox" name="fruit[]" value="Apricot"><br>
        Almond <input type="checkbox" name="fruit[]" value="Almond"><br>
        Banana <input type="checkbox" name="fruit[]" value="Banana"><br>
        <input type="submit" >
    </form>

    <?php
if (isset($_POST["fruit"])) {
    $fruits = $_POST["fruit"];
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }
} else {
    echo "No fruit selected.";
}
?>

</body>
</html>
