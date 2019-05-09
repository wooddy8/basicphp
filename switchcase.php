<?php
$size = "s";

switch ($size)
{
    case 's':
        echo "Small Size";
        break;

    case 'm':
        echo "Meiduim Size";
        break;

    case 'l':
        echo "Large Size";
        break;

    default:
        echo "Unknow Size";
        break;
}
echo "<br>";
?>

<?php
$a = 1;
do
{
    echo "$a Hi do while loop<br>";
    $a++;
} while ($a <= 12);
?>