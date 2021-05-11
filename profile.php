<!DOCTYPE html>
<?php 
session_start();
if(!isset($_SESSION['username'])){
	header("location:login.php");
	exit;
	}
	
require_once "header.php";
?>

  <div class="rightcolumn">
    <div class="card">
	<?php
	$file = fopen("users.txt", "r");
	$n = 0;
	while(($line = fgets($file)) !== false){
		$users[] = explode(',', $line, 7);
		$n++;
		}
	fclose($file);

	$j=0;
	for($i=0; $i<$n; $i++){		
		if($users[$i][0] == $_POST["username"]){			
			exit;
		}		
		$j++;		
	}
	$j--;	
	$count = count($users[$j]);
	
	echo "<h3>Felhasználónév:</h3>".$users[$j][0]."<br/>";
	echo "<h3>Email cím:</h3>".$users[$j][2]."<br/>";
	echo "<h3>Születési dátum:</h3>".$users[$j][3]."<br/>";
	if($count == 7){
		echo "<h3>Kedvenc állat:</h3>".$users[$j][4]."<br/>".$users[$j][5];
		echo "<h3>Nem:</h3>".$users[$j][6]."<br/>";
	}
	if($count == 6){
		echo "<h3>Kedvenc állat:</h3>".$users[$j][4];
		echo "<h3>Nem:</h3>".$users[$j][5]."<br/>";
	}
	if($count == 5){
		echo "<h3>Nem:</h3>".$users[$j][4]."<br/>";
	}
		
	?>
	
    </div>
  </div>
<?php require_once "footer.php"; ?>
