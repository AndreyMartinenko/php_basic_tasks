<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.02.18
 * Time: 23:50
 */
$age = 14;
echo "$age <br>";
if ($age <= 59 && $age > 18)
    echo "Вам еще работать и работать";
if ($age > 59)
    echo "Вам пора на пенсию";
if ($age > 0 && $age <= 17)
    echo "Вам еще рано работать";
if ($age < 0 || is_numeric($age) == false)
    echo "Неизвестный возраст";
