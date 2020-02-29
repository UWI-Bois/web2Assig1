<?php

function initForm(&$nisNum, &$salaries, &$weeklyContributions, &$totalContributions, &$totSalary, &$totWeekly, &$totTotal){
    $nisNum = $_POST['nisNum'];
//    if(len($nisNum) != 8) return;
    initSalaries($salaries, $totSalary);
    initWeeklyContributions($weeklyContributions, $salaries, $totWeekly);
    initTotalContributions($totalContributions, $salaries, $totTotal);
}

function initSalaries(&$salaries, &$totSalary){
    $salaries = array(
        $_POST['sal1'], $_POST['sal2'], $_POST['sal3'], $_POST['sal4'], $_POST['sal5']
    );
    $totSalary = 0;
    for ($i = 0; $i < sizeof($salaries); $i++){
        if($salaries[$i] == null) $salaries[$i] = 0.00;
        $totSalary += $salaries[$i];
    }
}

function initWeeklyContributions(&$weeklyContributions, &$salaries, &$totWeekly){
    $weeklyContributions = array();
    $totWeekly = 0;
    for ($i = 0; $i < sizeof($salaries); $i++){
        $weeklyContributions[$i] = getWeeklyContribution($salaries[$i]);
        $totWeekly += $weeklyContributions[$i];
    }
}
function initTotalContributions(&$totalContributions, &$salaries, &$totTotal){
    $totalContributions = array();
    $totTotal = 0;
    for ($i = 0; $i < sizeof($salaries); $i++){
        $totalContributions[$i] = getTotalContribution($salaries[$i]);
        $totTotal += $totalContributions[$i];
    }
}

function getWeeklyContribution($val){
    if($val > 200.00 && $val < 339.99) return 11.90;
    if($val > 340.00 && $val < 449.99) return 17.40;
    if($val > 450.00 && $val < 609.99) return 23.30;
    if($val > 610.00 && $val < 759.99) return 30.10;
    if($val > 760.00 && $val < 929.99) return 37.20;
    if($val > 930.00 && $val < 1119.99) return 45.10;
    if($val > 1120.00 && $val < 1299.99) return 53.20;
    if($val > 1300.00 && $val < 1489.99) return 61.40;
    if($val > 1490.00 && $val < 1709.99) return 70.40;
    if($val > 1710.00 && $val < 1909.99) return 79.60;
    if($val > 1910.00 && $val < 2139.99) return 89.10;
    if($val > 2140.00 && $val < 2379.99) return 99.40;
    if($val > 2380.00 && $val < 2629.99) return 110.20;
    if($val > 2630.00 && $val < 2919.99) return 122.10;
    if($val > 2920.00 && $val < 3137.99) return 133.30;
    if($val > 3138.00) return 138.10;
    return 0.0;
}
function getTotalContribution($val){
    if($val > 200.00 && $val < 339.99) return 35.70;
    if($val > 340.00 && $val < 449.99) return 52.20;
    if($val > 450.00 && $val < 609.99) return 69.90;
    if($val > 610.00 && $val < 759.99) return 90.30;
    if($val > 760.00 && $val < 929.99) return 111.60;
    if($val > 930.00 && $val < 1119.99) return 135.30;
    if($val > 1120.00 && $val < 1299.99) return 159.60;
    if($val > 1300.00 && $val < 1489.99) return 184.20;
    if($val > 1490.00 && $val < 1709.99) return 211.20;
    if($val > 1710.00 && $val < 1909.99) return 238.80;
    if($val > 1910.00 && $val < 2139.99) return 267.30;
    if($val > 2140.00 && $val < 2379.99) return 298.20;
    if($val > 2380.00 && $val < 2629.99) return 330.60;
    if($val > 2630.00 && $val < 2919.99) return 366.30;
    if($val > 2920.00 && $val < 3137.99) return 399.90;
    if($val > 3138.00) return 414.30;
    return 0.0;
}