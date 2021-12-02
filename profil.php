 <?php 
include("bdd.php");

if (isset($_GET['id']) && $_GET['id'] > 0)
{
var_dump($_GET);
$login_profil=htmlspecialchars($_GET['id']);
$getid = intval($_GET['id']);
$requete_profil =mysqli_query($bdd,"SELECT * FROM utilisateurs WHERE login='$login_profil' ");

}

?>

<!DOCTYPE html>
<html lang="Fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <?php
  include("link.php"); ?>

  <title>Profil</title>
</head>

<body>
  
  <?php include("header.php"); ?>

  <main>
    <P>
      <?php echo 'Bonjour et bienvenue '.$_SESSION['login'].' si vous désirez changer vos informations <a href="edition.php">Mon profil</a>';
  ?>
    </P>


    
  </main>
  <?php
  include("footer.php") ;?>
</body>

</html>
