<!DOCTYPE html>
<?php 
session_start();

if(isset($_POST['Submit'])){
	/* Regisztrált felhasználók beolvasása */
	$file = fopen("users.txt", "r");
	$n = 0;
	while(($line = fgets($file)) !== false){
		$users[] = explode(',', $line, 7);
		global $n;
		$n++;
		}
	fclose($file);
	
	/* Felhasználónév és jelszó ellenőrzése */
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$pw = isset($_POST['pw']) ? $_POST['pw'] : '';
	
	for($i=0; $i<$n; $i++){
		if ($users[$i][0] == $username && $users[$i][1] == $pw){
			$_SESSION['username']=$username;
			header("location:index.php");
			exit;
		} else {
			$err="<span style='color:red'>Helytelen belépési adatok</span>";
			}
	}
}
require_once "header.php";
?>

  <div class="rightcolumn">
    <div class="card">
	<form action="" method="post" enctype="multipart/form-data" accept-charset='UTF-8'>

      <label>Felhasználónév: <br/><input type="text" name="username" value="" placeholder="Felhasználónév" autofocus tabindex="1" required /></label> <br/>
	  
	  <label for="pwid">Jelszó: <br/><input type="password" name="pw" value="" placeholder="Jelszó" tabindex="2" required /> <br/></label>
	  
	  <input type="submit" name="Submit" value="Belépés" />
	  
	  <?php if(isset($err)){?>
	  <div class="error"><?php echo $err;?></div> <br>
	  <?php } ?>
	  
	</form>
	</div>
  </div>
<?php require_once "footer.php"; ?>
