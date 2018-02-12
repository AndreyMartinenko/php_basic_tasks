<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.02.18
 * Time: 0:36
 */
$s=60;
$t=0.8;
if ($t != 0) {
    $v = $s / $t;
    echo "Скорость автомобиля= $v km/h";
    echo "<br />";
    echo "Скорость автомобиля=" . $v * 1000 / 3600 . "m/s";
}

//secont mode
echo "<br />";
echo "<br />";
echo "Скорость автомобиля: \$v=\$s/\$t (km/h)";
echo "<br />";
echo "Скорость автомобиля: \$v=3.6*(\$s/\$t) (m/s)";