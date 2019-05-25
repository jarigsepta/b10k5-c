<?php

$Date1 = '2019-11-01';
$Date2 = '2019-11-05';

$array = array();

$Variable1 = strtotime($Date1);
$Variable2 = strtotime($Date2);

for (
    $currentDate = $Variable1;
    $currentDate <= $Variable2;
    $currentDate += (86400)
) {

    $Store = date('Y-m-d', $currentDate);
    $array[] = $Store;
}

print_r($array);
