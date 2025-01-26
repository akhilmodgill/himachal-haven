<?php
	include('header.php');
?>	
	<div class="rm">
			<div class="r1">
							 <h1>Registration form</h1>
						</div>
	<div class="reg6">
			<div class="reg6">
						<div class="reg2"><h1>SIGN-UP HERE</h1></div>
						<div class="r5">
							<form method="POST">
								<table>
								<tr>
									<td><font size="5px">First-name</font></td>
									<td><input type="text" name="fname" placeholder="Enter your first-name" class="reg3"></td>
								</tr>
								<tr>
									<td><font size="5px">Last-name</font></td>
									<td><input type="text" name="lname" placeholder="Enter your last-name" class="reg3"></td><br>
								</tr>
								<tr>
									<td><font size="5px">Gender</font></td>           
									<td><input type="radio"name="gen" class="reg4" value="Male">Male
									<input type="radio"name="gen" class="reg4" value="Female">Female</td><br>
								</tr>
								<tr>
									<td><font size="5px">Date of Birth</font></td>
									<td><input type="date" name="dob" class="reg4"></td><br>
								</tr>
								<tr>
									<td><font size="5px">Phone-no.</font></td>
									<td><input type="text" name="phone" class="reg5"></td><br>
								</tr>
								<tr>
									<td><font size="5px">E-mail</font></td>
									<td><input type="text" name="email" class="reg3"></td><br>
								</tr>
					<tr>
					<td><font size="5px">Address</font></td>
					<td><input type="text" name="address"class="reg3"></td>
					</tr>
						 <td><font size="5px">Create Password</font></td>
									<td><input type="password" name="password" placeholder="Enter your password" class="reg3"></td>
								</tr>
					<tr>
					<td colspan="2"><input type="submit" name="button" value="Sign-up" class="b1"></td>
					</tr>
					</table>
					</form>
					<?php
					if(isset($_POST['button']))
					{
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gen"];
$dob=$_POSt["dob"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$address=$_POST["address"];
$password=$_POST["password"];
$conn=mysqli_connect("localhost","root","","himachal");
$query="insert into sign_up(first_name,last_name,gender,dob,phone_no,e_mail,address,new_password)value('$fname','$lname','$gender','$dob','$phone','$email','$address','$password')";
$res=mysqli_query($conn,$query);
if($res)
{
	echo"data inserted";
}
else
{
	echo"error";
}
					}
?>
				
			</div>
		</div>
	</div>
    </div>
<?php
	include('footer.php');
?>