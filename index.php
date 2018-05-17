<?php
  session_start();
  $licznik=$_COOKIE['licznik'];
  $licznik++;
  setcookie('licznik', $licznik, time()+366*24*3600);
?>
<!DOCTYPE HTML>
<html lang="pl">

<?php include('includes/head.php');?>
<?php include('includes/body.php');?>

		<div id="content_right">
			<h1>ROD "Oaza" w Gdańsku/Sopocie</h1><br />
			<h4>Gdańsk, ul. Jelitkowska 71 <a href="https://www.google.com/maps/d/embed?mid=1q-AFB1k8QJiKGpx_rgKZuCwa1r0" width="640" height="480" target="_blank">- zobacz na mapie</a><br /><br />
			Dyżur Zarządu w każdą pierwszą sobotę miesiąca w godzinach 10:00 - 12:00</h4>
			
			<!-- <a href="komunikaty.php"><h3 style="color: red">UWAGA!!! - Nowy komunikat - kliknij tutaj</h3></a>

			<hr style="border: 1px solid #000000"> -->

			<div id="licznik">
				<?php
				if(file_exists("licznik")) $total = file("licznik");
				else 
					{
					unset($total);
					$total[0]=0;
					}
				$total[0]++;
				$plik = fopen("licznik","w");
				fwrite($plik, $total[0]);
				fclose($plik);
				print "<p>Licznik odwiedzin: $total[0]</p>\n";
				print "<p>Twoje odwiedziny: $licznik</p>";
				?>
			</div><br /><br />
		</div>
	</div>

<script src="js/cookieinfo-afterclick.js"></script>

<?php include('includes/footer.php');?>

</body>
</html>