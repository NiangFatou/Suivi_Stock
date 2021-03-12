<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="public/templeate/contact-form-v2/ContactFrom_v2/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/templeate/contact-form-v2/ContactFrom_v2/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/templeate/contact-form-v2/ContactFrom_v2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/templeate/contact-form-v2/ContactFrom_v2/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/templeate/contact-form-v2/ContactFrom_v2/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/templeate/contact-form-v2/ContactFrom_v2/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="public/templeate/contact-form-v2/ContactFrom_v2/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/templeate/contact-form-v2/ContactFrom_v2/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-contact2" style="background-image: url('public/templeate/contact-form-v2/ContactFrom_v2/images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form" action="UserController" method="POST">
					<span class="contact2-form-title">
						Connexion
					</span>

					<div class="wrap-input2 validate-input" data-validate="nom is required">
						<input class="input2" type="text" name="nom">
						<span class="focus-input2" data-placeholder="NON"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate="prenom is required">
						<input class="input2" type="eamil" name="email">
						<span class="focus-input2" data-placeholder="Email"></span>
</div>

					

					

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button class="contact2-form-btn" name="enregistrer" value="enregistrer">
								Connexion
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="public/templeate/contact-form-v2/ContactFrom_v2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="public/templeate/contact-form-v2/ContactFrom_v2/vendor/bootstrap/js/popper.js"></script>
	<script src="public/templeate/contact-form-v2/ContactFrom_v2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="public/templeate/contact-form-v2/ContactFrom_v2/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="public/templeate/contact-form-v2/ContactFrom_v2/js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>




<?php
include_once 'view/liste.php';
?>