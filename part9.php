<?php
    ini_set('display_errors', 1); //Show errors for debugging
    $firstname = "Jane"; //String type variable
    $lastname = "Doe"; //String type variable
    $age = 35; //Integer type variable
    $married = true; //Boolean type variable
    $childrenNames = array("Alice", "Bob"); //Array type variable

    $fullName = $firstName . " " . $lastName; //Concatenation operator
    $dogYears = $age/7; //Arithmetic Operator
    $isAdult = $dogYears > 4;; //Comparison operator
    $isSettled = $isAdult and $married; //Interger type variable
?>