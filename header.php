<!doctype html>
<html>
<head>
	<title>HIMACHAL HEAVEN</title>
<link rel="stylesheet" href="hp.css" type="text/css">
<link rel="stylesheet" href="distt.css" type="text/css">
<link rel="stylesheet" href="about.css" type="text/css">
<link rel="stylesheet" href="gallary.css" type="text/css">
<link rel="stylesheet" href="shimla.css" type="text/css">
<link rel="stylesheet" href="regg.css" type="text/css">
<link rel="stylesheet" href="login.css" type="text/css">
<link rel="stylesheet" href="contact.css" type="text/css">
<link rel="stylesheet" href="footerr.css" type="text/css">
<link rel="stylesheet" href="advanture.css" type="text/css">
<link rel="stylesheet" href="beautyy.css" type="text/css">
<link rel="stylesheet" href="trackingn.css" type="text/css">
<link rel="stylesheet" href="map.css" type="text/css">
</head>
<body>
<div class="q">
		<div class="a" >
		<img src="img/aa.png" height="100px" width="300px">
		</div>
		<div>
			<ul class="b">
				    <li><a href="himachal.php" class="abc">Home</a></li>
					<li><a href="about.php" class="abc">About-Us</a></li>
					<li><a href="contact.php" class="abc">Contact-Us</a></li>
					<li><a href="distt.php" class="abc">District</a></li>
					<?php if(isset($_SESSION['email'])){?>
					<li><a href="logout.php" class="abc">Logout</a></li>
					<?php } else {?>
					<li><a href="reg.php" class="abc">Sign-Up</a></li>
					<?php } ?>
		     </ul>
		</div>
</div>
</body>