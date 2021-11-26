<?php 
include("bdd.php"); /* ceci est la base de donné*/
if(isset($_POST['forminscription'])) 
{
    if (empty($_POST['nom']) AND empty($_POST['prenom ']) AND empty($_POST['pass']) AND empty($_POST['pass2']) AND empty($_POST['email']))
        {    $erreur = 'TOUT LES CHAMPS DOIVENT ETRE REMPLIE !';
      
         }
         else {
           
           include("bdd.php");
            $nom = htmlspecialchars( $_POST['nom']);
            $prenom = htmlspecialchars( $_POST['prenom']);
            $pass =sha1( $_POST['pass']);
            $pass2 =sha1( $_POST['pass2']);
            $email =htmlspecialchars( $_POST['email']);


            $passlength = strlen($_POST['pass']);
                if ($passlength < 7)
            {
                echo 'Votre PASSWORD doit être supérieur ou égal a 7 caractére !';
            }
            
          
            


           $requete = mysqli_query($bdd , "INSERT INTO `utilisateurs` (`id`, `Login`, `prenom`, `nom`, `password`) VALUES (NULL, '$nom', '$prenom', '$pass', '$email');" );
         }


}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=, initial-scale=1.0">
<link rel="stylesheet" href="style.css" />
<?php
include("link.php") ?>

<title>inscription</title>
</head>

<body> 
<header>
    <?php
include("header.php")
?>
</header>
<main>
<div class="center">
<form id="bas" method="POST" action="">
<h2>inscription</h2>
<table>

<?php 
    if(isset($erreur))
    {
        echo '<font color="red"> '.$erreur.'</font>';
    }
    ?>
    
        <label for="nom">Votre nom :</label>
        <input type="text" placeholder="Nom" id="nom"  name="nom"> <br>

        <label for="prenom">Votre prenom :</label>
        <input type="text" placeholder="Prenom" id="prenom"  name="prenom"> <br>

        <label for="pass">Votre mot de passe :</label>
        <input type="password" placeholder="Mot de pass" id="pass"  name="pass"> <br>

        <label for="pass2">Confirmer votre mot de passe :</label>
        <input type="password" placeholder="Confirmer votre mot de pass" id="pass2"  name="pass2"> <br>

        <label for="mail">Votre email :</label>
        <input type="email" placeholder="Email" id="email"  name="email"> <br>
        
        <button type = "submit" name="forminscription">Envoyer</button>
        </table>
    </form>

</div>
</main>
<footer>
    <?php
        include("footer.php")
        ?>
</footer>
</body>



</div>

</html>