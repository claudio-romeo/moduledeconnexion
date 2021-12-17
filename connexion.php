
<?php 

include("bdd.php");
//si le formaulaire est fournis alors 
if(isset($_POST['entrer']))
{
  if (!empty($_POST['login']) && !empty($_POST['pass']))
    {
        $login_entree=htmlspecialchars($_POST['login']);
        $pass_entree=($_POST['pass']);
        echo $login_entree;
        $requete_connect =mysqli_query($bdd,"SELECT * FROM utilisateurs WHERE login='$login_entree' ");
        $tableau=mysqli_fetch_assoc($requete_connect);
        $userexist = $requete_connect ;
        
        if(isset($tableau['login']))
        {
        echo $tableau['login'];
        
        }

        if(isset($tableau['login']) && $tableau['login']==$login_entree)
        {
            echo '<br>'.'login ok';         
            $_pass= $tableau['password'];

            if(password_verify($pass_entree,$_pass)==TRUE)
            {
            echo 'ok c est le bon pass';
            $_SESSION['id']= $tableau['id'];
            $_SESSION['login']= $tableau['login'];
            $_SESSION['nom']= $tableau['nom'];
            $_SESSION['prenom']= $tableau['prenom'];
            $_SESSION['password']= $tableau['password'];
            header("location: profil.php?id=".$_SESSION['id']);

            }
            else
            $erreur = 'Mauvais mot de pass';
        }
        else 
        {
        $erreur = 'login invalide';
        }
    }
  else 
    {
      $erreur = "Les informations ne sont pas corrects !";
       
    }    
}

?>
<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="style.css" />

    <?php
    include("link.php")
    ?>
      <title>Connexion</title>
</head>

<?php
include("header.php"); 

?>

<body>

    <div id="container">
        <!-- zone de connexion -->

        <form action="connexion.php" method="POST">
            <h1>Connexion</h1>

            <label><b>Login d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le Login d'utilisateur" name="login" >

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="pass" >

            <input type="submit" id='submit' name ="entrer"value='LOGIN'>
            <?php
             if(isset($erreur))
             {
                 echo '<font color="red"> '.$erreur.'</font>';
             }
        
            ?>
        </form>
    </div>
    <footer> <?php
            include("footer.php"); ?></footer>
</body>

</html>