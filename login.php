<?php session_start();?>
<?php
	include('header.php');
?>
<div class="lg6">
<div>
			<div class="lg2">
							 <h1>LOGIN</h1>
						</div>
	<div class="lg3">
	<div class="lg1">
	<h1>LOGIN HERE</h1>
	</div>
	<div class="lg4">
		<?php
	if(isset($_POST['button']))
	{
$user=$_POST["uname"];
$pwd=$_POST["pwdd"];
$conn=mysqli_connect("localhost","root","","himachal");
$query="select * from sign_up where e_mail='$user' and new_password='$pwd'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
	$_SESSION['email']=$user;
	echo"<script>location.href='distt.php';</script>";
}
else
{
	echo"Invalid Username Or Password!!!";
}
	}
?>
	<form  method="POST"  
	onsubmit="return checkform(this)";>
		<table>
		<tr>
		<td><font size="5px">Username :</font></td>
		<td><input type="text" name="uname" placeholder="Username or E-mail" class="lg5"></td>
		</tr>
	    <tr>
		<td><font size="5px">Password :</font></td>
		<td><input type="password" name="pwdd" placeholder="Enter your Password" class="lg5"></td><br>
		</tr>
		<tr>
					<td colspan="2"><input type="submit" name="button" value="LOGIN" class="b1"></td>
		</tr>
		</table>
	</form>
	

	</div>
	</div>
</div>
</div>
<?php
	include('footer.php');
?>
