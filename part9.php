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

    function getFullName($firstName, $lastName) { //Function name
        return $firstName . " " . $lastName; //Returned value
    }

    $fullname = getFullName($firstName, $lastName); //Using variables
    $fullName = getFullName("Alice", "Doe"); //Using values

    function getIsSettled($age, $married) { //Function Name
        $dogYears = $age/7;
        $isAdult = $dogYears > 4;
        $isSettled = $isAdult and $married;
        return $isSettled; //Returned value
    }

    $isSettled = getIsSettled($age, $married); //Using variables
    $isSettled = getIsSettled(5, false); //Using values

    echo $fullName;
?>