<?php

include 'dbcon.php';

$prefered_destination= $_POST["destination"];
$area_of_interest= $_POST["interest"];
$level_of_course= $_POST["course"];
$name= $_POST["fullname"];
$email= $_POST["email"];
$mobile_no= $_POST["mobile"];
$city= $_POST["city"];
$last_qualification= $_POST["last_qualification"];
$score= $_POST["score"];


$sql = "INSERT INTO evaluation (country, course, course_level, name, email, mobile, city, last_qualificaion, score) VALUES ('$prefered_destination', '$area_of_interest', '$level_of_course', '$name', '$email', '$mobile_no', '$city', '$last_qualification', '$score');";
$res= mysqli_query($connection, $sql);


$sql2= "select name, country from college where country like '$prefered_destination' and cutoff>='$score';";
$retreval= mysqli_query($connection, $sql2);

if($retreval)
{
  echo "You are eligible for: <br><br>";
	while($row=mysqli_fetch_array($retreval))
	{
	echo "College Name: {$row[0]} <br>".
	     "Country: {$row[1]} <br>".
	     "---------------------------<br>";
	}
}

else
{
	echo "Retreval Error !!! <>br";
}


?>
