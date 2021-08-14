alert ("Hello World");

var firstName = "Jane"; //String type variable
var lastName = "Doe"; //String type variable
var age = 35; //number type variable
var married = true; //boolean type variable
var childrenNames = ["Alice", "Bob"]; //Array type variable
var husband = {firstName: "John", lastName: "Doe", age: 35} //object type variable

var fullName = firstName + " " + lastName; //concatentation operator
var dogYears = age/7; //arithmetic operator
var isAdult = dogYears > 4; //comparison operator
var isSettled = isAdult && married; //integer type variable

function getFullName(firstName, lastName) { //Function name
    return firstName + " " + lastName; //returned value
}

var fullName = getFullName(firstName, lastName); //Using variables
var fullName = getFullName("Alice", "Doe"); //using values

function getIsSettled (age, married) { //function name
    dogYears = age/7;
    isAdult = dogYears > 4;
    isSettled = isAdult && married;
    return isSettled;
}

var isSettled = getIsSettled (age, married);
var isSettled = getIsSettled (5, false);
