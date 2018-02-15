<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.18
 * Time: 19:00
 */
$a = rand(-1000, 1000);
$b = rand(-1000,1000);
echo "first number = $a <br /> second number= $b";
echo '<br />';
if ($a > $b) {
    echo $a;
}
else echo $b;