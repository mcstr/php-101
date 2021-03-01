<?php

$var1 = 10;
$var2 = 3;

switch($var1)
{
    case 1 : echo 'is one';
    break;
    case 10: echo 'is ten';
    break;
    case "hi": echo 'is hi';
    break;
    // in case we want to have a fallback
    default: echo 'var1 is none of the above';
}
echo "<br>";

switch($var2)
{
    case 1 : echo 'is one';
    break;
    case 10: echo 'is ten';
    break;
    case "hi": echo 'is hi';
    break;
    // in case we want to have a fallback
    default: echo 'var2 is none of the above';
}


?>