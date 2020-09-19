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

// 9 - Loop
//WHILE loop
$a = 1;
while ($a <= 5) {
    echo 'Counter ' . $a . '<br>';
    $a++;
}

//DO WHILE (kahit mag false na, ginagawa nya pa rin ang nasa loop)
$b = 6;
do {
    echo 'Counter: ' . $b . '<br>';
    $b++;
} while ($b <= 5);

// For loop
for ($i=0; $i <= 5 ; $i++) { 
    echo 'Counter: '. $i .'<br>';
}

// Foreach (ginagamit sa array)
$test_array = ['Code', 'with', 'Monmon'];
foreach ($test_array as $value) {
    echo 'Value: ' .$value . '<br>';
}

//using and getting the index
foreach ($test_array as $index => $value) {
    echo 'Value: ' . $index . ' : ' . $value . '<br>';
}

$test_array_two = array('Code', 'with', 'rIndex' =>'Mon');
foreach ($test_array_two as $index => $value) {
    echo 'Value: ' . $index . ' : ' . $value . '<br>';
}

// 10 - Forms (kukunin ang value sa forms)
if (isset($_POST['submit'])){
    // $name = $_GET['name'];
    // $age = $_GET['age'];
    
    $name = $_POST['name'];
    $age = $_POST['age'];

    echo "Name: $name <br>";
    echo "Age: $age <br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="/PHP_Tutorial_for_Github/index.php" method="get"> -->
    <form action="/PHP_Tutorial_for_Github/index.php" method="post">
        <input type="text" name="name" id="" placeholder="Enter a name">
        <input type="text" name="age" id="" placeholder="Enter an age">
        <input type="submit" value="CLICK">
    </form>    
</body>
</html>

<?php
// 11 - MySQL
$host = 'localhost';
$user = 'root';
$password = '';
$database = '';

// create a connection
$connection = mysqli_connect($host, $user, $password, $database);

$query_user = "SELECT * FROM user";
// $sql_user = mysqli_query($connection, $query_user);
$sql_user = $connection->query($query_user);

// While loop
while($results = mysqli_fetch_array($sql_user)) {
    echo 'Name: '.$results['name'].'<br>';
    echo 'Age: '.$results['age'].'<br>';
}

// For Loop
for ($i=1; $i <= mysqli_num_rows($sql_user) ; $i++) { 
    $results = mysqli_fetch_array($sql_user);

    echo 'Name: '.$results['name'].'<br>';
    echo 'Age: '.$results['age'].'<br>';
}














