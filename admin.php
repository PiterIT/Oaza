<!DOCTYPE HTML>
<html lang="pl">

<?php include('includes/head.php');?>
<?php include('includes/body.php');?>

		<div id="content_right">
			<article class="contact-form"> 
				<form action="mail.php" method="post">
					<h3><b>Formularz kontaktowy:</b></h3>

					<label for="inputSubject">Imię &nbsp; i &nbsp; nazwisko:</label>
					<input type="text" name="subject" placeholder="Imię Nazwisko">

					<label for="inputEmail" >Twój &nbsp; e-mail:</label>
					<input type="text" name="email" placeholder="E-mail">
								
					<label for="inputMessage">Wiadomość:</label>
					<textarea type="text" name="message" placeholder="Tu wpisz treść wiadomości"></textarea>
							
					<input id="submit" type="submit" name="submit" value="Wyślij wiadomość">       
				</form>    
			</article>
		</div>
	</div>

<?php include('includes/footer.php');?>

</body>
</html>