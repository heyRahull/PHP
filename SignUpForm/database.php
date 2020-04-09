<?php


$username ="root";
$servername ="localhost";
$password ="";
$database ="phptut";


//creating database connection

$conn = mysqli_connect($servername,$username,$password,$database);

//check connection
if(!$conn)
{
	die("Failed to connect".mysqli_connect_error());
}
else
{
	echo "connection successful";
}


$sql ="INSERT INTO `users` (`s. no.`, `Name`, `Age`, `Salary`) VALUES ('5', 'sohan', '29', '3000')";

$sql ="INSERT INTO `users` (`s. no.`, `Name`, `Age`, `Salary`) VALUES ('1', 'shyam', '33', '9000')";
$sql ="INSERT INTO `users` (`s. no.`, `Name`, `Age`, `Salary`) VALUES ('2', 'Ram', '50', '8000')";

mysqli_query($conn,$sql);

mysqli_close($conn);
?>
