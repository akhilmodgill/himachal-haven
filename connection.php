<?php
$user=$_POST["uname"];
$pwd=$_POST["pwdd"];
$conn=mysqli_connect("localhost","root","",himachal);
$query="insert into login(user_name,password)value('$user','$pwd')";
$res=mysqli_query($conn,$query);
if($res)
{
	echo"data inserted";
}
else
{
	echo"error";
}
?>