<?php
session_start();
//header('location:singup.html');
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='masu';
$con =mysqli_connect($mysql_host, $mysql_user, $mysql_password);
mysqli_select_db($con, 'notesflix');
if(isset($_POST['create']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =$_POST['password'];

    $q="SELECT * FROM userauth WHERE email= '$email'";
    $result = mysqli_query($con, $q);
    $num = mysqli_num_rows($result);
    if($num == 1)
    {
        echo "Email address already registered. Try Login";
    }

    else
    {
        $qy = "INSERT INTO userauth(name, email, password) VALUES ('$name', '$email', '$password')";
        mysqli_query($con, $qy);
    }
}
?>