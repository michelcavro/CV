<!DOCTYPE html>

<html moznomarginboxes mozdisallowselectionprint>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Michel CAVRO</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/reset.css">
		<link rel="stylesheet" type="text/css" href="../css/normalize.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>

	<body class="scrollingBackground" style="background-position: center 0px">
		<header>
			<!-- barre fixe du haut -->
			<div class="topBorder" id="topbar"></div>
			<!-- fond changeant du titre -->
			<div class="fondTitre"></div>
			<div class="photo"><img src="../img/photo2.jpg"></div>
			<section class = "titre">
				<div id="michel">
					<h1>Michel CAVRO</h1>
					<h2>web integrator</h2>
				</div>
				
				<!-- liens de navigation -->
				<nav class="boutons">
					<ul>
						<li><a href="#topbar" id="navHaut">TOP</a></li>
						<li><a href="#experience" id="navExper">EXPERIENCE</a></li>
						<li><a href="#aptitudes" id="navApt">SKILLS</a></li>
						<li><a href="#contact" id="navCont">CONTACT</a></li>
						<li><a href="#topbar" onclick="myFunction()" id="navPrint">PRINT</a></li>
					</ul><br />
					<script>
					function myFunction() {
					    window.print();
					}
					</script>
				</nav>
				<ul class="flag">
					<li><a href="../fr/" title="Version française" id="flag_fr"><img src="../img/fr.png"></a></li>
				</ul>
			</section>
		</header>
		
		<main>
			<section>
				<div class="contactDetails"> 
					<h3>Contact Details</h3>
					<ul>
						<li class="large"><a href="mailto:mail@michelcavro.net"><i class="fa fa-envelope-o "></i></a><p>Email Address : </p><a href="mailto:mail@michelcavro.net"><p>mail@michelcavro.net</p></a></li>

						<li class="responsive"><a href="RESUME_Michel-Cavro.pdf" target="_blank"><i class="fa"><strong>CV</strong></i></a><p>Download:</p><a href="RESUME_Michel-Cavro.pdf" target="_blank"><p>RESUME_michelcavro.PDF</p></a></li>

						<li class="responsive"><a href="https://goo.gl/maps/LNy7YKbMgGF2" title="See on Google Map" target="_blank"><i class="fa fa-map"></i></a><a href="https://goo.gl/maps/LNy7YKbMgGF2" title="See on Google Map" target="_blank"><p>Adress: 46, Lomicht L-9696Winseler | Luxembourg</p></a></li>

						<li class="responsive"><a href="tel:+352661205628"><i class="fa fa-phone"></a></i><p>Telephone: </p><a href="tel:+352661205628"><p>+(352) 661 205 628</p></a></li>
						
						<li class="responsive"><a href="https://lu.linkedin.com/in/michelcavro" target="_blank"><i class="fa fa-linkedin"></a></i><a href="https://lu.linkedin.com/in/michelcavro" target="_blank"><p>My Linkedin</p></a></li>
					</ul>
				</div>
			</section>
			<section class="vignettes">
				<ul>
					<a href="about.html"><div><h2>About me</h2><li><img src="../img/vignette1.jpg"></li></div></a>
					<a href="resume.html"><div><h2>Resume</h2><li><img src="../img/vignette2.jpg"></li></div></a>
					<a href="experience.html"><div><h2>Experience</h2><li><img src="../img/vignette3.jpg"></li></div></a>
					<a href="education.html"><div><h2>Education</h2><li><img src="../img/vignette4.jpg"></li></div></a>
					<a href="business.html"><div><h2>Business areas</h2><li><img src="../img/vignette5.jpg"></li></div></a>
				</ul>
			</section>
			<section">
				<article class="galerie">
					<!--<img src="img/earth2.jpg" height="237" width="450">-->
					<a class="fancybox" rel="group" href="../img/earth2_en.jpg"><img src="../img/earth2_small.jpg" alt="" /></a>
					<a class="fancybox" rel="group" href="../img/CEACAP_en.jpg"></a>
					<a class="fancybox" rel="group" href="../img/Studio-Concept_en.jpg"></a>
					<a class="fancybox" rel="group" href="../img/GY-track_en.jpg"></a>
					<a class="fancybox" rel="group" href="../img/cristal_en.jpg"></a>
					<a class="fancybox" rel="group" href="../img/michelcavro_en.jpg"></a>
				</article>

				<article class="competences">
					<h3 id="aptitudes">SKILLS</h3>
					<h4>Technical Skills</h4>
					<ul>
						<li id="html">HTML5/CSS3</li>
						<li id="java">Javascript/jQuery/Ajax</li>
						<li id="php">PHP/SQL</li>
						<li id="wp">Wordpress</li>
						<li id="adobe">Adobe Creative Suite</li>
						<li id="soft">3D Software</li>
						<li id="office">Office Word, Excel, Powerpoint</li>
					</ul>
					<span id="expertise">expert</span>
					<span id="maitrise">proficient</span>
				</article><br />

				<article class="techno">
					<h3>TECHNOLOGIES</h3>
					<img src="../img/logo_HTML5_2.png">
					<img src="../img/Logo_css3.png">
					<img src="../img/Logo_Javascript.png">
					<img src="../img/logo_JQuery.png">
					<img src="../img/Logo_PHP.png">
					<img src="../img/Logo_MySQL.png">
					<img src="../img/logo_WORDPRESS.png">
					<img src="../img/logo_LINUX.png">
				</article>
			</section>
			<div class="wf3"><a href="http://www.wf3.fr/" target="_blank"><img src="../img/logo_WF3.png"></a>Professional Certificate</div>

		</main>

		<footer>
			<article class="details"> 
		
			    <?php
			    /*
			    	********************************************************************************************
			    	CONFIGURATION
			    	********************************************************************************************
			    */
			    // destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
			    $destinataire = 'mail@michelcavro.net';
			     
			    // copie ? (envoie une copie au visiteur)
			    $copie = 'oui'; // 'oui' ou 'non'
			     
			    // Messages de confirmation du mail
			    $message_envoye = "We got your message. Thank You !";
			    $message_non_envoye = "Email sending failed, please try again.";
			     
			    // Messages d'erreur du formulaire
			    $message_erreur_formulaire = "<a href=\"index.php\">Vous devez d'abord envoyer le formulaire</a>.";
			    $message_formulaire_invalide = "Check all the fields and that you have a correct email.";
	     
			    /*
			    	********************************************************************************************
			    	FIN DE LA CONFIGURATION
			    	********************************************************************************************
			    */
			    ?>
				<!-- formulaire Email -->
				<form class="form" id="contact" method="post" action="index.php#contact">
			    	<h3>Contact</h3>
			    		<input type="text" id="name" name="name" tabindex="1" placeholder="Name" />
			    		<input type="text" id="email" name="email" tabindex="2" placeholder="Email" /><br/>
			    		<!-- <input type="text" id="objet" name="objet" tabindex="3" placeholder="Objet" /><br/> -->
			    		<textarea id="message" name="message" cols="30" rows="5" placeholder="Message......." ></textarea>
			    		<input type="submit" name="envoi" id="submit" value="Send" /><br/>
			    		<span id="helpForm"></span>
			    <?php
			     
			    // on teste si le formulaire a été soumis
			    if (!isset($_POST['envoi']))
			    {
			    	// formulaire non envoyé
			    	/*
			    	?>
			    		<span><?=$message_erreur_formulaire?></span>
					<?php
					*/
			    }
			    else
			    {
			    	/*
			    	 * cette fonction sert à nettoyer et enregistrer un texte
			    	 */
			    	function Rec($text)
			    	{
			    		$text = htmlspecialchars(trim($text), ENT_QUOTES);
			    		if (1 === get_magic_quotes_gpc())
			    		{
			    			$text = stripslashes($text);
			    		}
			     
			    		$text = nl2br($text);
			    		return $text;
			    	};
			     
			    	/*
			    	 * Cette fonction sert à vérifier la syntaxe d'un email
			    	 */
			    	function IsEmail($email)
			    	{
			    		$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
			    		return (($value === 0) || ($value === false)) ? false : true;
			    	}
			     
			    	// bouton cliqué, on récupère tous les champs.
			    	$name    = (isset($_POST['name']))    ? Rec($_POST['name'])    : '';
			    	$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
			    	//$objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
			    	$objet   = "Copy of your message sent to Michel Cavro";
			    	$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';
			     
			    	// On va vérifier les variables et l'email ...
			    	$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
			     
			    	if (($name != '') && ($email != '') /*&& ($objet != '')*/ && ($message != ''))
			    	{
			    		// les 4 variables sont remplies, on génère puis envoie le mail
			    		$headers  = 'MIME-Version: 1.0' . "\r\n";
			    		$headers .= 'From:'.$name.' <'.$email.'>' . "\r\n" .
			    				'Reply-To:'.$email. "\r\n" .
			    				'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
			    				'Content-Disposition: inline'. "\r\n" .
			    				'Content-Transfer-Encoding: 7bit'." \r\n" .
			    				'X-Mailer:PHP/'.phpversion();
			    	
			    		// envoyer une copie au visiteur ?
			    		if ($copie == 'oui')
			    		{
			    			$cible = $destinataire.';'.$email;
			    		}
			    		else
			    		{
			    			$cible = $destinataire;
			    		};
			     
			    		// Remplacement de certains caractères spéciaux
			    		$message = str_replace("&#039;","'",$message);
			    		$message = str_replace("&#8217;","'",$message);
			    		$message = str_replace("&quot;",'"',$message);
			    		$message = str_replace('<br>','',$message);
			    		$message = str_replace('<br />','',$message);
			    		$message = str_replace("&lt;","<",$message);
			    		$message = str_replace("&gt;",">",$message);
			    		$message = str_replace("&amp;","&",$message);
			     
			    		// Envoi du mail
			    		$num_emails = 0;
			    		$tmp = explode(';', $cible);
			    		foreach($tmp as $email_destinataire)
			    		{
			    			if (mail($email_destinataire, $objet, $message, $headers))
			    				$num_emails++;
			    		}
			     
			    		if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
			    		{
			    		//header('Location: thank_you.php');
			    		?>
			    			<span><?=$message_envoye?></span>
			    		<?php
			    		}
			    		else
			    		{
			    		//header('Location: error.php');
			    		?>
			    			<span><?=$message_non_envoye?></span>
			    		<?php
			    		};
			    	}
			    	else
			    	{
			    		// une des 3 variables (ou plus) est vide ...
			    	?>
			    		<span><?=$message_formulaire_invalide?></span>
			    	<?php
			    	};
			    }; // fin du if (!isset($_POST['envoi']))
			    ?>
				</form>

			</article>

			<article class="endFooter"> 
				<p>Design by Michel Cavro</p>
			</article>
		</footer>

		<script type="text/javascript" src="../lib/jquery-2.2.3.js"></script>
		<script type="text/javascript" src="../js/script-en.js"></script>

				<!-- Add jQuery library -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

		<!-- Add mousewheel plugin (this is optional) -->
		<script type="text/javascript" src="../fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

		<!-- Add fancyBox -->
		<link rel="stylesheet" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
		<script type="text/javascript" src="../fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>

		<!-- Optionally add helpers - button, thumbnail and/or media -->
		<link rel="stylesheet" href="../fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
		<script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

		<link rel="stylesheet" href="../fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
		<script type="text/javascript" src="../fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	</body>
</html>