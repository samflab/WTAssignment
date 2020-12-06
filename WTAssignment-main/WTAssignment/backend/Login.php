<?php
    $con = new mysqli("localhost","root","","notesflix");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

// Program to display current page URL.


try{
  $email= $_REQUEST['email'];
  $password= $_REQUEST['password'];

    if($email=="" || $password=="")
    {
        exit("not ok") ;
    }
mysqli_select_db($con,"notesflix");
$sql1="SELECT * from userauth";
$records=mysqli_query($con,$sql1);


$count=0;
while($rowvalue=mysqli_fetch_array($records))
{
    if($email==$rowvalue['email'] && $password==$rowvalue['password'])
      { $count=$count+1;
        echo('ok');
        session_start();
      
        $_SESSION['username']=$rowvalue['name'];

        break;

      }

}


    if($count==0)
    {echo('not ok');
    }


}
catch(Excption $e)
{echo  "not connceted";}
  ?>
