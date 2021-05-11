<!DOCTYPE html>
<?php

session_start(); 

$email = $pw1 = $pw2 = $username = $date = $nem = $allat[] = null;
$emailErr = $pwErr  = $diffPwErr = $usernameErr = $dateErr = $nemErr = $sikeres = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	//Regisztráció ellenőrzés
	$file = fopen("users.txt", "r");
	$n = 0;
	while(($line = fgets($file)) !== false){
		$users[] = explode(',', $line, 7);
		$n++;
		}
	fclose($file);
	
	if(empty($_POST["username"])){
		$usernameErr = "*Adja meg a felhasználónevet";
	}	
	for($i=0; $i<$n; $i++){
		if($users[$i][0] == $_POST["username"]){
			$usernameErr = "Foglalt felhasználónév";
		}
	}
	if(empty($usernameErr)){
		$username = test_input($_POST["username"]);
	}	
	
	if(empty($_POST["pw1"]) || empty($_POST["pw2"])){
		$pwErr = "*Adja meg a jelszót";
	}else{
		$pw1 = test_input($_POST["pw1"]);
		$pw2 = test_input($_POST["pw2"]);
	}
	
	if($pw1!=$pw2 && strlen($pw1) != 0 && strlen($pw2) != 0){
		$diffPwErr="*Nem egyező jelszó";		
	}
	
	if(empty($_POST["email"])){
		$emailErr = "*Adja meg az email címet";
	}else{
		$email = test_input($_POST["email"]);
	}

	if(empty($_POST["date"])){
		$dateErr = "*Adja meg a születési dátumot";
	}else{
		$date = test_input($_POST["date"]);
	}
	
	if(!empty($_POST["allat"])){		
		$allat = $_POST["allat"];
	}
	
	if(empty($_POST["nem"])){
		$nemErr = "*Adja meg a nemet";
	}else{
		$nem = test_input($_POST["nem"]);
	}	

	//Regisztráció végrehajtás
	if(!$emailErr && !$pwErr && !$usernameErr && !$diffPwErr && !$dateErr && !$nemErr){
		$sikeres = "<span style='background-color: green; color:white; border-radius: 5px; font-size: 26px'>Sikeres regisztráció</span>";
		
		$users = fopen("users.txt", "a+") or die("Nem lehet megnyitni a fájlt!");
		$txt = $username . ",";
		fwrite($users, $txt);		
		$txt = $pw1 . ",";
		fwrite($users, $txt);
		$txt = $email . ",";
		fwrite($users, $txt);		
		$txt = $date . ",";
		fwrite($users, $txt);
		
		$N = count(array_filter($allat));
			
		for($i=0; $i<$N; $i++){
			$txt = $allat[$i] . ",";
			fwrite($users, $txt);
			}

		$txt = $nem . "\n";
		fwrite($users, $txt);
		fclose($users);		
		
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
require_once "header.php";
?>

  <div class="rightcolumn">
    <div class="card">

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" accept-charset='UTF-8'>
	<?php echo $sikeres; echo "<br/>" ?>
	<label>Felhasználónév: <br/><input type="text" name="username" value="" placeholder="Név" maxlength="20"  tabindex="1" /></label> <br/>
	  <div class="error"> <?php echo $usernameErr;?></div> <br>
      
	  
	  <label for="pwid">Jelszó: <br/><input type="password" name="pw1" id="pwid1" value="" placeholder="Jelszó" tabindex="2" /></label>
	  <div class="error"> <?php echo $pwErr;?></div> <br>
	  
	  <label for="pwid">Jelszó újra: <br/><input type="password" name="pw2" id="pwid2" value="" placeholder="Jelszó újra" tabindex="3" /> <br/></label>
	  <div class="error"> <?php echo $diffPwErr;?></div> <br>
	  
	  <label>E-mail: <br/><input type="email" name="email" value="" placeholder="E-mail" autofocus tabindex="4"  /></label> <br/>
	  <div class="error"> <?php echo $emailErr;?></div> <br>	  

      <label>Születési dátum: <br/><input type="date" name="date" value="" min="1900-01-01" max="2019-01-01" tabindex="5" /></label> <br/>
	  <div class="error"> <?php echo $dateErr;?></div> <br>
	  
	  <fieldset>
      <legend>Kedvenc állat</legend>
      <label for="checkbox1">Kutya: </label>
      <input type="checkbox" name="allat[]" value="kutya" tabindex="6" /> <br/>

      <label for="checkbox2">Macska: </label>
      <input type="checkbox" name="allat[]" value="macska" tabindex="7"  /> <br/>
      </fieldset>
	  
	  <label for="radio1id1">Férfi: </label>
      <input type="radio" id="radio1id1" name="nem" value="férfi" tabindex="8" />

      <label for="radio1id2">Nő: </label>
      <input type="radio" id="radio1id2" name="nem" value="nő" tabindex="9" /><br/>
	  <div class="error"> <?php echo $nemErr;?></div> <br>
	  
	  <input type="submit" value="Regisztráció" />
      <input type="reset" value="Törlés" /> </br>	  

    </form>
    </div>
  </div>
<?php require_once "footer.php"; ?>
