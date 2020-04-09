<!DOCTYPE html>
<html>
<head>
	<title>Php Tutorial</title>
</head>
<body>


<?php


/*
echo "Hello World <br>";      //This is a print statement.
$a=50;
$b=40;
echo "The sum of a and b is <br> ",$a+$b;
echo "<br><br> ";

$str1="This is a string <br>";
var_dump(($str1));                    //Var_dump function is used to find the type of variable.


$fruits = array('Apple' ,'Orange','grapes' );    //This is a an Array
var_dump($fruits);
echo "<br>";
$var1 =null;



echo"<br>THIS IS THE EXAMPLE OF ''FUNCTIONS IN STRINGS''<br><br>";
#FUNCTIONS IN STRINGS :
$str2 =" My Name is RAHUl";
echo strlen($str2),"<br>";   //This fuction is used for counting the length of string.
echo str_word_count($str2);  //This Function is used for counting the words in a string.
echo strrev($str2);          //String reverse function
echo strpos($str2,"is");     //Finding position of a word in the string
echo str_replace("is", "are", $str2);   //replacing a word in the string




echo"<br><br>THIS IS THE EXAMPLE OF ''OPERATORS''<br><br>";
#USE OF OPERATORS :
echo "The value of 1+2 is : ",1+2,"<br>";       //Addition operator
echo "The value of 1-2 is : ",1-2,"<br>";       //Subtraction operator
echo "The value of 1*2 is : ",1*2,"<br>";		//Multiplication operator
echo "The value of 1/2 is : ",1/2,"<br>";		//Division operator
echo "The value of 1**2 is : ",1**2,"<br>";		//Power operator
$p=1;
echo $p,"<br>";
$p=$p+1;                                        //increment operator
echo $p;


echo"<br><br>THIS IS THE EXAMPLE OF ''CONDITIONAL STATEMENT (IF-ELSE)''<br><br>";
#CONDITIONAL STATEMENT(if-else):
$age=15;
if($age<27)
{
	echo"youn are not eligible for vote.<br>";
}
elseif ($age==18) {
	echo "This is your first attempt for voting.<br>";
}
else
{
	echo "You are eligible for Voting.<br>";
}




#LOOPS (FOR, FOR-EACH, WHILE, DO-WHILE) :
$var2=1;
while ($var2 <=5) {
	echo "The value of variable is :".$var2."<br>";
	$var2++;
}



echo"<br>THIS IS THE EXAMPLE OF ''CONTINUE'' KEYWORD<br><br>";
//continue keyword(it skips the current iteration)
$var2=1;
while ($var2 <=5) {
		if($var2==3){
		$var2++;
		continue;
	}

	echo "<br>The value of variable is :".$var2."<br>";
	$var2++;
}



echo"<br>THIS IS THE EXAMPLE OF ''BREAK'' KEYWORD<br><br>";
//break keyword(It breaks the loop and comes out of the loop)
$var2=1;
while ($var2 <=5) {
		if($var2==3){
		break;
	}

	echo "<br>The value of variable 2 is :".$var2."<br>";
	$var2++;
}



echo"<br>THIS IS THE EXAMPLE OF ''FOR'' LOOP<br><br>";
//FOR LOOP
for ($i=0; $i < 5; $i++) { 
	echo" RAhul"."<br>"; 
}



echo"<br>THIS IS THE EXAMPLE OF ''DO_WHILE'' LOOP<br><br>";
//Do-While loop
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);



echo"<br>THIS IS THE EXAMPLE OF ''FOREACH'' LOOP<br><br>";
//FOREACH loop
$fruits = array('orange', 'mango','banana', 'grapes' );
foreach ($fruits as $value) {
	echo "The fruit is : $value <br>";
}




echo"<br>THIS IS THE EXAMPLE OF ''USER DEFINED FUNCTION (FUNCTION FOR FINDING AVERAGE)'' <br><br>";
//Function for average number
function average_number($num1,$num2)
{
	$average=($num1+$num2)/2;
	return $average;
}

echo average_number(8,8)."<br>";



echo"<br>THIS IS THE EXAMPLE OF ''USER DEFINED FUNCTION(FUNCTION FOR AREA OF CIRCLE)'' <br><br>";
//function for Area of circle
define('PI', '3.14');
function circle_area($radius)
{
	$area=PI*$radius*$radius;
	return $area;

}
echo circle_area(5)."<br>";
*/

$numbers = array(4,6,2,22,11);

$leng = count($numbers);
rsort($numbers);
for ($i=0; $i <$leng ; $i++) { 
	echo $numbers[$i]."<br>";
}



?>                       
</body>
</html>