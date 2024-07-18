<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" , method = "get">
        Name : <input type="text" name="name" >
        <br>
        <input type="submit">
        <br>
        <br>

        <?php 
        // now we can access the information in form here in php program
        echo $_Get["name"] && $_Get["email"];

        ?>
    </form>
</body>
</html>