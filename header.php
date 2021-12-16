
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />

    <title>Document</title>
</head>
<body>
<header>
      <nav>
          <ul>
              <li class="tete"><a href="index.php">Accueil</a></li>
          </ul>

          <ul class="listindex">
<?php 
if(isset($_SESSION['id']))
{
?>
              <li><a href="deconnexion.php">deconnexion</a></li>
              <li><a href="profil.php">profil</a></li>

<?php
}
else {
?>
    <li><a href="connexion.php">connexion</a></li>
    <li><a href="inscription.php">inscription</a></li>

    <?php
}
?>
          </ul>
      </nav>
  </header>
</body>
</html>

