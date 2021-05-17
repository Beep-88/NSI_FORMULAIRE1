<?php $nom= htmlspecialchars($_POST["nom"]);
$prenom= htmlspecialchars($_POST["prenom"]);
$metier= htmlspecialchars($_POST["metier"]);
$choixinteret= htmlspecialchars($_POST["choixinteret"]);
$choixprefere= htmlspecialchars($_POST["choixprefere"]);
$mail= htmlspecialchars($_POST["mail"]);
$centreinteret= htmlspecialchars($_POST["centreinteret"]);
$orientation= htmlspecialchars($_POST["orientation"]); ?>

<htmllang="fr">
  <head>
    <metacharset="UTF-8"/>
    <title>Reponse formulaire spécialité NSI</title>
  </head>
  <body>
    <h1><?php print"Bonjour $prenom $nom"?></h1>
	<p>Voici l'adresse mail où on peut vous contacter: <?php print"$mail"?></p>
    <p>Vous voulez devenir <?php print"$metier"?>, super !<br><br>
    <p>Vous êtes passionés par <?php print"$centreinteret"?>, très intérréssant.</p>
    <?php print"$choixinteret"?>
    <?php print"$choixprefere"?><br>
    <p>Nous vous souhaitons de réussir vos études et d'entrer dans <?php print"$orientation"?> de vos rêves !</p><br>
    
  </body>
</html>