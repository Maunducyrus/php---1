<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting user input</title>
</head>
<body>
    
<!-- <?php 
echo ("<h2>Getting User Input</h2>");
?> 

<?php ?> 
     <form action="site.php" method="get">
Name: <Input type="text" name="name" required> <br><br><br>
Email: <Input type="email" name="email" required><br><br>
Age: <input type="number" name="age">
<br><br><br>
        <input type="submit">
     </form><br>

    Your name is <?php echo $_GET["name"] ?>
    <br>
    Your email is <?php echo $_GET["email"] ?>
    <br>
     Your Age is <?php echo $_GET["age"] ?> -->

     <!-- <h1>Building a Basic Calculator using PHP</h1>
<form action="site.php" method="get">
Number 1  <input type="number" name="num1">
    <br><br>
Number 2   <input type="number" name="num2">
    <br><br>
    <input type="submit">
</form>

Answer:<?php echo $_GET["num1"] + $_GET["num1"] ?> -->

<!-- <h1>Building a Mad Libs Game</h1>
<form action="site.php" method="get">
    Color: <input type="text" name="color"> <br><br>
  PluralNoun: <input type="text" name="PluralNoun"> <br><br>
    Celebrity: <input type="text" name="celebrity"> <br><br>

    <input type="submit">
</form>
<br><br>

<?php 

$color = $_GET["color"];
$PluralNoun = $_GET["PluralNoun"];
$celebrity = $_GET["celebrity"];

echo "Roses are $color <br>";
echo "$PluralNoun are blue <br>";
echo "I love you $celebrity <br>";
?> -->

<!-- <h1>POST vs GET METHODS</h1>

<form action="site.php" method="post">
password: <input type="password" name="password"> <br> <br>
<input type="submit"> <br>

</form>
<?php echo $_POST["password"]; ?> -->

<!-- <!-- <h1>Arrays</h1>

<?php 
// $friends = array("Kevin", "Karen", "Onesmus", "Samuel");

$friends[1] = "Cyroh";
$friends[4] = "Maundu";
echo $friends[4];
// echo count($friends); -->

?> -->

<!-- <h1>Using Checkboxes</h1> -->

<!-- <form action="site.php" method="post">
    Apples:<input type="checkbox" name="fruits[]" value="apples"><br>
    Lemons:<input type="checkbox" name="fruits[]" value="lemons"><br>
    Pineapple:<input type="checkbox" name="fruits[]" value="pineapples"><br>

    <input type="submit">
</form> -->

 <?php  
// $fruits = $_POST["fruits"];
// echo $fruits[0]; -->

?> 

<h1>Associative Arrays</h1>
<form action="site.php" method="post">
    <input type="text" name="students">
    <input type="submit">
</form>

<?php
$grades = array("Jim"=>"A+", "pam"=>"B-", "Oscar"=>"C+");
// echo $grades[$_POST["students"]]
// echo $grades["Jim"];

?>

 <!-- <h1>PHP Function</h1>
 <?php 

 function sayHi($name, $age){
    echo "Hello $name, you are $age <br>";
 }

 sayHi("Maundu", 40);
 sayHi("Wambua", 30);
 sayHi("Cyrus", 34);

 ?> -->

<!-- <h1> Return statement</h1>

<?php 

function cube($num){
return $num * $num * $num;
}

$cubeResult = cube(2);
echo $cubeResult;

?> -->

<h1>If statements</h1>
<?php 

$isMale = true;
$isTall = false;
if($isMale && $isTall){
echo "You are a tall male";
}
elseif($isMale && !$isTall){
echo "You are a short Male";
}
elseif(!$isMale && $isTall){
echo "You are not Male but you are tall";
}
else{
  echo "you are not male and not tall"; 
}

?>

<h1>IF STATEMENT (con't)</h1>
<?php

 function getMax($num1, $num2, $num3){
if($num1 >= $num2 && $num1 >= $num3){
return $num1;
} 
elseif($num2 >= $num1 && $num2 >= $num3){
    return $num2;
}
else{
    return $num3;
}
 }

 echo getMax(20, 100, 150);

?>

<h1>Building a better Calculator</h1>
<form action="site.php" method="post">
    First Num: <input type="number" step="0.1" name="num1"><br><br>
    Operators: <input type="text" name="Op"><br><br>
    Second Num: <input type="number" name="num2"><br><br>

    <input type="submit">
</form>
<?php 

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$Op = $_POST["Op"];

if($Op == "+"){
    echo $num1 + $num2;
}
elseif($Op == "-"){
    echo $num1 - $num2;
}
elseif($Op == "/"){
    echo $num1 / $num2;
}
elseif($Op == "*"){
    echo $num1 * $num2;
}
else{
    echo "Invalid Operator";
}

?>

<h1>Switch Statements</h1>

<form action="site.php" method="post">
what is your grade?
<input type="text" name="grade">
<input type="submit">
</form>

<?php
$grade = $_POST["grade"];
// switch($grade){
    // case "A":
    //     echo "You did amazing!"
        // break,
// }
?>

<?php
func myTest(){
    $x = 0;
    echo $x;
    $x++
}
myTest();
?>
</body>
</html>