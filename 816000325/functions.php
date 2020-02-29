<?php

function initForm(){
    $nisNum = $_POST['nisNum'];
    echo $nisNum;
    initArray();
}

function initArray(){
    $salaries = array(
        $_POST['sal1'], $_POST['sal2'], $_POST['sal3'], $_POST['sal4'], $_POST['sal5']
    );

    for ($i = 0; $i < sizeof($salaries); $i++){
        if($salaries[$i] == null) $salaries[$i] = 0.00;
    }

    echo implode(", ", $salaries);
    return;
}