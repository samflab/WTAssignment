<?php
session_start();
//header('location:singup.html');
try{
  $con = new mysqli("localhost","root","","notesflix");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con, "notesflix");

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password =$_REQUEST['password'];

    $q="SELECT * FROM userauth WHERE email= '$email'";
    $result = mysqli_query($con, $q);
    $num = mysqli_num_rows($result);
    if($num == 1)
    {
        die ("Email address already registered. Try Login");
    }

    else
    {
        $qy = "insert into userauth(name,email,password) values('$name', '$email', '$password')";
        mysqli_query($con, $qy);
        echo"ok";
    }


}
catch(Exception $e)
{echo "not working";

}
?>
