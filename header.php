<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Kedvenc állatmenhely</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">	
	<a href="index.php">
		Kedvenc állatmenhely
		<img style="box-shadow: 0 0 30px #81DAF5;" src="pic.jpg" alt="Főoldal" title="Főoldal"/>
				
	</a>  
</div>

<div class="topnav">
  <a href="index.php" >Főoldal</a>
  <div class="dropdown">
	<button class="dropbtn">Örökbefogadható állataink</button>
	<div class="dropdown-content">
      <a href="kutyak.php">Kutyák</a>
      <a href="macskak.php">Macskák</a>
    </div>
	</div>
  <a href="info.php">Információk</a>
  <a href="contact.php">Elérhetőségek</a>
</div>


<div class="row">
  <div class="leftcolumn">
    <div class="card">
	 <?php error_reporting(0); if($_SESSION['username']){ ?>
	 <h2>Üdvözlünk, <?php echo $_SESSION['username'] ?>!</h2>
            <div class="login">
      <a href="profile.php"><h4>Profilom</h4></a>
	 </div>
	 <div class="login">
      <a href="logout.php"><h4>Kijelentkezés</h4></a>
	 </div>        
	 <?php }else{ ?>
		<div class="login">
      <a href="login.php"><h4>Belépés</h4></a>
	 </div>
	 <div class="login">
      <a href="regisztracio.php"><h4>Regisztráció</h4></a>
	 </div>
	 <?php } ?>
    </div>
  </div>