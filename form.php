<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name='viewport'
          content='width=device-width, initial-scale=1.0, maximum-scale=1.0' />
    <title>Bistro Régent Stalingrad Bordeaux</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <!-- adding font -->
    <link href="https://fonts.googleapis.com/css?family=Butterfly+Kids&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand&display=swap" rel="stylesheet">
</head>
<body>
<nav class="menu">
    <h1><a class="titre" href="#">Bistro Régent</a></h1>
</nav>
<div class="container">
    <h4>Merci <?php echo $_GET['name']; ?>, votre <?php echo $_GET['object']; ?> a été envoyée.</h4>
    <h5>Vous recevrez un e-mail de confirmation à l'adresse: <?php echo $_GET['email']; ?>.</h5>
</div>

<?php include("_footer.php"); ?>
</body>
</html>
