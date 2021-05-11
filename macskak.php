<!DOCTYPE html>
<?php 
session_start(); 
require_once "header.php";
?>
  <div class="rightcolumn">
    <div class="card">
	<h1>Macskák</h1>
	<table>
      <caption>Forrás: menhely.eu</caption>
      <tr>
        <th></th>
        <th>Név</th>
        <th>Kor</th>
        <th>Fajta</th>
        <th>Ivara</th>
      </tr>
      <tr>
        <td>
			<a target="_blank" href="pics/bella_nagy.jpg">
				<img src="pics/bella.jpg" alt="Bella" title="Bella"/>
			</a> 
		</td>
        <td>Bella</td>
        <td>3 éves</td>
        <td>Európai házimacska</td>
        <td>Nőstény</td>        
      </tr>
      <tr>
        <td>
			<a target="_blank" href="pics/debbie_nagy.jpg">
				<img src="pics/debbie.jpg" alt="Debbie" title="Debbie"/>
			</a> 
		</td>
        <td>Debbie</td>
        <td>2 éves</td>
        <td>Európai házimacska</td>
        <td>Nőstény</td>        
      </tr>
      <tr>
        <td>
			<a target="_blank" href="pics/tom_nagy.jpg">
				<img src="pics/tom.jpg" alt="Tom" title="Tom"/>
			</a> 
		</td>
        <td>Tom</td>
        <td>2 éves</td>
        <td>Európai házimacska</td>
        <td>Kandúr</td>        
      </tr>     
    </table>
    </div>

  </div>
<?php require_once "footer.php"; ?>
