<?php
// 1 - Variables
$name = 'Monmon';
$age = 29;
$gender = 'Male';

// 2 - Echo or Print
echo $name . '<br>';
echo "Name: $name <br>" ; //putting the variable into a string
echo 'Age:' .$age . '<br>';
echo "Gender: $gender <br>";

// 3 - Data Types by using var_dump() //this way you can check the data types
echo "Int example: "; var_dump(77); echo "<br>";
echo "Float example: "; var_dump(7.7); echo "<br>";
echo "Array example: "; var_dump(['1123', 'Two']); echo "<br>";
echo "Null example: "; var_dump(NULL); echo "<br>";
echo "Boolean example: "; var_dump(true); echo "<br>";

// 4 - Constants (once its assigned or declared a value it won't be changed)
define('MESSAGE', 'Thank you for learning');
echo MESSAGE; echo "<br>";

define('TEST_ARRAY', ['one', 'two', 'three']);
print_r(TEST_ARRAY); echo "<br>"; //this is how you print the array

// 5 - Operators +, -, *, /, %, **
echo 1 + 1; echo "<br>";
echo 1 - 1; echo "<br>";
echo 1 * 2; echo "<br>";
echo 10 / 2; echo "<br>";
echo 10 % 3; echo "<br>"; //yung remainder na 1 ang kinukuha ni modulo
echo 2 ** 3; echo "<br>"; //2 x 2 x 2 = 8

// 6 - Functions
function show_message($message){
    return "Your message is $message";
}
echo show_message('You are amazing'); echo "<br>";

// 7 - Arrays (pwedeng dalawa ang pang declare sa arrays)
$array1 = ['Apple', 'Banana', 'Lemon'];
$array2 = array('Apple', 'Banana', 'Lemon');

echo $array1[0]; echo "<br>";//getting the index 0 zero
echo $array2[0]; echo "<br>";//getting the index 0 zero

//You can declare an index value, so that the next value in array will have the value of zero index
$array2 = array('a'=>'Apple', 'Banana', 'Lemon');
echo $array2[0]; echo "<br>";//Apple is no longer have the index of 0
echo $array2['a']; echo "<br>";

print_r($array1); echo "<br>"; //this is how we check the array and check it 
print_r($array2); echo "<br>"; //this is how we check the array and check it index

// 8 - Conditions
$mon = 1;

if ($mon == 1) {
    echo 'Correct';
} else {
    echo 'Incorrect';
}
echo "<br>";

//this will display incorrect because if we use 3 equal sign we compare the data type
if ($mon === '1') {
    echo 'Correct';
} else {
    echo 'Incorrect';
}
echo "<br>";

// Ternary 
$monmon = 10;
echo $monmon == 10 ? 'Correct' : 'Incorrect'; //true:false
echo "<br>";

// Switch
$monmamon = 2;
switch ($monmamon) {
    case 1:
        echo 'One <br>';
        break;
    case 2:
        echo 'Two <br>';
        break;
    
    default:
        echo 'None <br>';
        break;
}










