<?php 
include("bdd.php"); /* ceci est la base de donné*/

// Si le formulaire est soumis alors 
if(isset($_POST['forminscription'])) 
{
    //si les champs son differents de vide alors 
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['pass']) && !empty($_POST['pass2']) && !empty($_POST['login']))
    {
        // si le mot de passe correspond a la confirmation alors 
        if($_POST['pass']===$_POST['pass2'])
        {
            // on fait une requete en bdd qui va compter le nombre de login correspondant a ce que a a rentrer l'utilisateur

            $requete =mysqli_query($bdd, "SELECT COUNT(*) FROM `utilisateurs` WHERE login = '$_POST[login]'");
            $result = mysqli_fetch_assoc($requete);
        
            // si le resultat de la requete est de 1 alors le login existe en bdd et on affiche un message d'erreur
            if($result['COUNT(*)']== 1)
                {
                $erreur="login non disponible ! ";
                }
                // sinon on inscrit en bdd 
            else {
                $login= htmlspecialchars($_POST['login']);
                $nom= htmlspecialchars($_POST['nom']);
                $prenom= htmlspecialchars($_POST['prenom']);
                $pass= password_hash($_POST['pass'], PASSWORD_DEFAULT);

               $requete_insert= mysqli_query($bdd, "INSERT INTO `utilisateurs`(`id`,`Login`, `prenom`, `nom`, `password`) VALUES (NULL,'$login','$prenom', '$nom', '$pass')");

               // une fois finaiser redirection
               header('location: connexion.php');
                }
        } 
        else {
            $erreur ="Vos password ne correspondent pas !";
        }
    }   
    else {
        $erreur= "Veuillez remplir les champs demandés";
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
<form id="bas" method="post" action="">
<h2>inscription</h2>
<table>

<?php 
    if(isset($erreur))
    {
        echo '<font color="red"> '.$erreur.'</font>';
    }
    ?>
     <label for="login">Votre Login :</label>
        <input type="text" placeholder="Login" id="login"  name="login"> <br>
    
        <label for="nom">Votre nom :</label>
        <input type="text" placeholder="Nom" id="nom"  name="nom"> <br>

        <label for="prenom">Votre prenom :</label>
        <input type="text" placeholder="Prenom" id="prenom"  name="prenom"> <br>

        <label for="pass">Votre mot de passe :</label>
        <input type="password" placeholder="Mot de pass" id="pass"  name="pass"> <br>

        <label for="pass2">Confirmer votre mot de passe :</label>
        <input type="password" placeholder="Confirmer votre mot de pass" id="pass2"  name="pass2"> <br>

       
        
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