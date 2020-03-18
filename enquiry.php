<html>
<?php
include 'dbcon.php';

$name= $_POST["name"];
$email= $_POST["email"];
$mobile_no= $_POST["mobile"];
$reason= $_POST["reason"];

$sql = "INSERT INTO enquiry (Name, email, mobile_no, reason) VALUES ('$name','$email','$mobile_no','$reason');";

if ($sql)
{
  echo "Running";
}
else {
  echo "Error";
}

echo "<br><br>";

$res= mysqli_query($connection, $sql);

if ($res)
{
  echo "You have successfully regitered\n";
}
else {
  echo "Error!!! Something went wrong\n";
}

?>

<a class="btn" href="changed.php" role="button">Home</a>

</html>
