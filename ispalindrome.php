<?php

function ispalindrome($word)
{
    $revstr = "";
    for ($i = 0; $i < strlen($word); $i++) 
    {
//        print "<br>";
        PRINT $revstr;
        $revstr = $word[$i] . $revstr;
    }

    if ($word == $revstr)
    {
        return true;
    }
    else
    {
        return false;
    }
}

$palin = "lolol";
$value = ispalindrome($palin);
if($value == true)
{
    print("it is a palindrome");
}
else
{
    print("it is not a palindrome");
}

?>