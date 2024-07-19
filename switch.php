<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="post">
       Enter your marks :  <input type="number" name="marks">
       <br>
       <br>
        See your grade : <input type="submit">

    </form>

    <?php 
        $marks = $_POST["marks"];
        switch ($marks) {
            case ($marks >= 80 && $marks <= 100):
                echo "A+";
                break;
            case ($marks >= 70 && $marks <= 79):
                echo "A";
                break;
            case ($marks >= 60 && $marks <= 69):
                echo "B";
                break;
            case ($marks >= 50 && $marks <= 59):
                echo "C";
                break;
            case ($marks >= 40 && $marks <= 49):
                echo "D";
                break;
            case ($marks >= 33 && $marks <= 39):
                echo "E";
                break;
            
            default:
                echo "F";
                break;
        }
        ?>
    
</body>
</html>