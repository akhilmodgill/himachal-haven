<?php session_start();?>
<?php
	include('header.php');
?>
<div>
			<div class="ct1">
							 <h1>Contact</h1>
						</div>
<div class="ct2">
				<div class="ct3">
				<div class="ct6">
			  <h1>Got a question?we'll give you stright answer</h1>
			    </div>
				<form method="POST">
				<div class="ct5">
				<font size="5px">Name</font><br>
				<input type="text" name="name" placeholder="Enter your name" class="ct4"  >
				</div>
				<div class="ct5">
				<font size="5px">Phone No.</font><br>
				<input type="text" name="pn" placeholder="Enter your phone no." class="ct4">
				</div>
				<div class="ct5">
				<font size="5px">E-Mail</font><br>
				<input type="text" name="em" placeholder="Enter your e-mail" class="ct4">
				</div>
				<div class="ct5">
				<font size="5px">Message Box</font><br>
				</div>
				<div>
				<textarea cols="25" row="25" class="ct8" name="msg"></textarea>
				</div>
				<div class="ct5">
				<?php if(isset($_SESSION['email'])){?>
					<input type="submit" name="button" value="SUBMIT" class="ct9">
				<?php } else {?>
				  <a href="javascript:alert('plz Login First');location.href='login.php';"> <input type="button" name="button" value="Sign-up" class="ct9"></a>
				<?php } ?>
					</div>
					</form>
				</div>
				
	<?php
	if(isset($_POST['button']))
	{
$user=$_POST["name"];
$phone=$_POST["pn"];
$email=$_POST["em"];
$msg=$_POST["msg"];
$username=$_SESSION['email'];
$conn=mysqli_connect("localhost","root","","himachal");
$query="insert into query(name,phone_no,e_mail,msg_box,username)values('$user','$phone','$email','$msg','$username')";
$res=mysqli_query($conn,$query);
if($res)
{
	echo"Query Submitted Successfully";
}
else
{
	echo "Error in Query Submission!!!!";
}
	}
?>
	</div>
	</div>

<div>
<div class="ct1">
			<h2>STATE MAP</h2>
			</div>
			<div class="ctt1">
			<img src="img\14.gif" height="500px" width="800px">
			</div>
			<div class="ct10">
			<a href="maps.php"><h2>Click here to open Maps</h2></a>
			</div>		
</div>
<?php
	include('footer.php');
?>
