<?php session_start();?>
<?php include('header.php');?>
<div class="dist_main">
	<div class="a_dist">
	<h1>VENUE LIST</h1>
	</div>
	<div class="adis" >
	<div class="aass">
	<h1>SHIMLA</h1>
	</div>
	<?php if(isset($_SESSION['email'])){ ?>
	<a href="shimla.php" class="abc"><img src="img\111.jpg" height="300px" width="100%"></a>
	<?php } else {?>
	<a href="javascript:alert('Plz Login First!!!');location.href='login.php';" class="abc"><img src="img\111.jpg" height="300px" width="100%"></a>
	<?php } ?>
	</div>
	<div class="adis">
	<div class="aass">
	<h1>KINNOUR</h1>
	</div>
	<?php if(isset($_SESSION['email'])){ ?>
	<a href="kinnour.php" class="abc"><img src="img\128.jpg" height="300px" width="100%"></a>
	<?php } else {?>
	<a href="javascript:alert('Plz Login First!!!');location.href='login.php';" class="abc"><img src="img\128.jpg" height="300px" width="100%"></a>
	<?php } ?>
	</div>
	<div class="adis">
	<div class="aass">
	<h1>LAHOUR AND SPITI</h1>
	</div>
	<?php if(isset($_SESSION['email'])){ ?>
	<a href="Lahourandspiti.php" class="abc"><img src="img\134.jpg" height="300px" width="100%"></a>
	<?php } else {?>
	<a href="javascript:alert('Plz Login First!!!');location.href='login.php';" class="abc"><img src="img\134.jpg" height="300px" width="100%"></a>
	<?php } ?>
	</div>
	<div class="adis">
	<div class="aass">
	<h1>CHAMBA</h1>
		</div>
		<?php if(isset($_SESSION['email'])){ ?>
	<a href="chamba.php" class="abc"><img src="img\138.jpg" height="300px" width="100%"></a>
	<?php } else {?>
	<a href="javascript:alert('Plz Login First!!!');location.href='login.php';" class="abc"><img src="img\138.jpg" height="030px" width="100%"></a>
	<?php } ?>
	</div>
	<div class="adis">
	<div class="aass">
	<h1>KANGRA</h1>
	</div>
	<?php if(isset($_SESSION['email'])){ ?>
	<a href="kangra2.php" class="abc"><img src="img\153.jpg" height="300px" width="100%"></a>
	<?php } else {?>
	<a href="javascript:alert('Plz Login First!!!');location.href='login.php';" class="abc"><img src="img\153.jpg" height="300px" width="100%"></a>
	<?php } ?>
	</div>
	<div class="adis">
	<div class="aass">
	<h1>KULLU</h1>
	</div>
	<?php if(isset($_SESSION['email'])){ ?>
	<a href="kullu.php" class="abc"><img src="img\168.jpg" height="300px" width="100%"></a>
	<?php } else {?>
	<a href="javascript:alert('Plz Login First!!!');location.href='login.php';" class="abc"><img src="img\168.jpg" height="300px" width="100%">
	<?php } ?>
	</div>
	<div class="adis">
	<div class="aass">
	<h1>UNA</h1>
	</div>
	<?php if(isset($_SESSION['email'])){ ?>
	<a href="UNA.php" class="abc"><img src="img\239.jpg" height="300px" width="100%"></a>
	<?php } else {?>
	<a href="javascript:alert('Plz Login First!!!');location.href='login.php';" class="abc"><img src="img\239.jpg" height="300px" width="100%">
	<?php } ?>
	</div>
	<div class="adis">
	<div class="aass">
	<h1>MANDI</h1>
	</div>
	<?php if(isset($_SESSION['email'])){ ?>
	<a href="mandi.php" class="abc"><img src="img\162.jpg" height="300px" width="100%"></a>
	<?php } else {?>
	<a href="javascript:alert('Plz Login First!!!');location.href='login.php';" class="abc"><img src="img\162.jpg" height="300px" width="100%"></a>
	<?php } ?>
	</div>
	<div class="adis">
	<div class="aass">
	<h1>HAMIRPUR</h1>
	</div>
	<?php if(isset($_SESSION['email'])){ ?>
	<a href="hamirpur.php" class="abc"><img src="img\243.jpeg" height="300px" width="100%"></a>
	<?php } else {?>
	<a href="javascript:alert('Plz Login First!!!');location.href='login.php';" class="abc"><img src="img\243.jpeg" height="300px" width="100%"></a>
	<?php } ?>
	</div>
	<div class="adis">
	<div class="aass">
	<h1>BILASPUR</h1>
	</div>
	<?php if(isset($_SESSION['email'])){ ?>
	<a href="bilaspur.php" class="abc"><img src="img\238.jpg" height="300px" width="100%"></a>
	<?php } else {?>
	<a href="javascript:alert('Plz Login First!!!');location.href='login.php';" class="abc"><img src="img\238.jpg" height="300px" width="100%">></a>
	<?php } ?>
	</div>
	<div class="adis">
	<div class="aass">
	<h1>SOLAN</h1>
	</div>
	<?php if(isset($_SESSION['email'])){ ?>
	<a href="solan.php"class="abc"><img src="img\224.jpg" height="300px" width="100%"></a>
	<?php } else {?>
	<a href="javascript:alert('Plz Login First!!!');location.href='login.php';" class="abc"><img src="img\224.jpg" height="300px" width="100%"></a>
	<?php } ?>
	</div>
	<div class="adis">
	<div class="aass">
	<h1>SIRMOR</h1>
	</div>
	<?php if(isset($_SESSION['email'])){ ?>
	<a href="sirmour.php"class="abc"><img src="img\242.jpg" height="300px" width="100%"></a>
	<?php } else {?>
	<a href="javascript:alert('Plz Login First!!!');location.href='login.php';" class="abc"><img src="img\242.jpg" height="300px" width="100%"></a>
	<?php } ?>
	</div>
</div>
			<?php include('footer.php');

?>