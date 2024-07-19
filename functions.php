<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>Functions</h1>
    <hr>
    <ul>
        <li>
            functions are bock code 
        </li>
        <li>
            Reusable code 
        </li>
        <li>
            No repetition of line of code.
        </li>
    </ul>

    <?php

    function sayhi()
    {
        echo "Hello bra";
    }

    function sum($a,$b)
    {
        return $a + $b;
    }

    sayhi();
    print"<br>";


     $sum = sum(10,20);
     print($sum);
     print"<br>";


     // checking if a number is even or not 

    function iseven($num)
    {
        if ($num /2 ==0) {
            print"number is even";
        }
        else
        {
            print"number is odd";
        }
    }

    iseven(10);
    print"<br>";

    
    function ispalindrome($word)
    {
        $revstr="";
        for ($i=0; $i < strlen($word); $i++) 
        {
            if ($i == 0) {
                $revstr = $word[$i] . $revstr;
            }
            else
            {
                $tmp = $revstr[$i-1];
                $revstr[$i-1] = $word[$i];
                $revstr[$i] = $tmp;
            }
        }

        if ($word == $revstr)
        {
            return true ;
        }
        else
        {
            return false;

        }

        
    }

    $palin = "najan";
    $value = ispalindrome($palin);
    print "$value";
    print"<br>";


    


  


      
    ?>
    
</body>
</html>