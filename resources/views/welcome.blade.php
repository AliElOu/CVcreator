<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fgfgf</title>
	<link rel="stylesheet" href="{{ asset('styles/welcomeStyle.css') }}">

</head>

<style>
    .background {
        background-image: url("{{ asset('images/formats1.jpg') }}");
    }
</style>

<body>
<section class="showcase">
	
			<div class="background">
				
			</div>
			<div class="content">
				<h1>Créateur de CV en ligne</h1>
				<h3>Rédiger un CV et le télécharger immédiatement</h3>
				<a href="register.php" class="btn">Commencer</a>
			</div>
		</section>

		
</body>
</html>

<?php
//Login Session Code
session_start();
if(isset($_SESSION['cust_Id']))
{
	
	  echo "<script>window.location.href='landing.php';</script>";

}
?>