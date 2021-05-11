<!DOCTYPE html>
<?php 
session_start(); 
require_once "header.php";
?>
  <div class="rightcolumn">
    <div class="card">
	<h1>Kutyák</h1>
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
			<a target="_blank" href="pics/jeffy_nagy.jpg">
				<img src="pics/jeffy.jpg" alt="Jeffy" title="Jeffy"/>
			</a> 
		</td>
        <td>Jeffy</td>
        <td>4 éves</td>
        <td>Keverék</td>
        <td>Ivartalanított kan</td>        
      </tr>
      <tr>
        <td>
			<a target="_blank" href="pics/brenda_nagy.jpg">
				<img src="pics/brenda.jpg" alt="Brenda" title="Brenda"/>
			</a> 
		</td>
        <td>Brenda</td>
        <td>5 éves</td>
        <td>Staffordshire jellegű</td>
        <td>Ivartalanított szuka</td>        
      </tr>
      <tr>
        <td>
			<a target="_blank" href="pics/estrella_nagy.jpg">
				<img src="pics/estrella.jpg" alt="Estrella" title="Estrella"/>
			</a> 
		</td>
        <td>Estrella</td>
        <td>9 éves</td>
        <td>Német juhász jellegű</td>
        <td>Ivartalanított szuka</td>        
      </tr>
      <tr>
        <td>
			<a target="_blank" href="pics/costa_nagy.jpg">
				<img src="pics/costa.jpg" alt="Costa" title="Costa"/>
			</a> 
		</td>
        <td>Costa</td>
        <td>7 éves</td>
        <td>Keverék</td>
        <td>Ivartalanított kan</td>
      </tr>
      <tr>
        <td>
			<a target="_blank" href="pics/boss_nagy.jpg">
				<img src="pics/boss.jpg" alt="Boss" title="Boss"/>
			</a> 
		</td>
        <td>Boss</td>
        <td>8 éves</td>
        <td>Keverék</td>
        <td>Ivartalanított kan</td>
      </tr>
      <tr>
        <td>
			<a target="_blank" href="pics/jamie_nagy.jpg">
				<img src="pics/jamie.jpg" alt="Jamie" title="Jamie"/>
			</a> 
		</td>
        <td>Jamie</td>
        <td>10 éves</td>
        <td>Husky-német juhász keverék</td>
        <td>Ivartalanított kan</td>
      </tr>
    </table>
    </div>

  </div>
<?php require_once "footer.php"; ?>
