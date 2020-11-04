<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='masu';
$con=mysqli_connect($mysql_host, $mysql_user,$mysql_password);
$connect = mysqli_select_db($con, 'notesflix');
$name='Deepak';
$email='deepak@gmail.com';
$password='123456789';
if(!$connect)
{
	die('Cannot connect to notesflix');
}

else
{	
	$qy = "SELECT * FROM userauth WHERE email= '$email'";
		$result = mysqli_query($con, $qy);
		$num =mysqli_num_rows($result);
		if($num == 1)
		{
			echo "Email exists";
		}
		else
		{
		$qy = "INSERT INTO userauth(name, email, password) VALUES ('$name', '$email', '$password')";
		mysqli_query($con, $qy);
		echo "All records inserted";
		}
}

mysqli_close($con);
?>