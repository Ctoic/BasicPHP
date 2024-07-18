<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PostMethod</title>
</head>
<body>
    <h1>Post method</h1>
    <hr>
    <p>
        <ul>
            <li>
            Post is secure method to get information
            </li>
            <li>
                Your Data will not be visble in the Url 
            </li>
            <li>
                better for secure data like passwords
            </li>
        </ul>

       
    </p>
    <hr>
    <form action="post.php" method="post">
        password: <input type="password" name="password"><br>
        <input type="submit">
    </form>
    <?php echo $_POST["password"];
    $friend = array("jawad","ali","shahaban","true",True,90);
    echo $friend;
    echo $friend[2];
    echo $friend[3];
    //counting the elements 
    $len_array =  count($friend);
    ECHO "<HR>";

    for ($i=0; $i < $len_array; $i++) { 
        print "$friend[$i] , <br>";
                # code...
    }

    
    ?>
</body>
</html>